<?php

namespace App\Http\Controllers;
 

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactExport;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;



use App\Models\ContactGroupe;
use App\Models\Contact;
use App\Models\Groupe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    


    public function index()
    {
        $groupe = Groupe::all();
        $contact = Contact::all();
        return view('contact.index')-> with('contact',$contact , 'groupe',$groupe );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupe = Groupe::all();
        return view('contact.create')-> with('groupe',$groupe);
    }

    /**
     * Store a newly created resource in storage.
     */



   
     
     // ...
     
    public function store(Request $request)
    {
         // Validez les entrées du formulaire, si nécessaire
     
         // Créez d'abord le contact dans la table 'playsms_featurePhonebook'
         $contact = Contact::create([
             'mobile' => $request->input('mobile'),
             'name' => $request->input('name'),
             'email' => $request->input('email'),
             'tags' => $request->input('tags'),
         ]);
     
         // Récupérez l'ID du groupe sélectionné dans le formulaire
         $selectedGroupeCode = $request->input('groupe_code');
     
         // Recherchez le groupe correspondant dans la table 'playsms_featurePhonebook_group' en fonction du code
         $groupe = Groupe::where('code', $selectedGroupeCode)->first();
     
         // Vérifiez si le groupe existe
         if ($groupe) {
             // Créez une entrée dans la table de liaison 'playsms_featurePhonebook_group_contacts'
             ContactGroupe::create([
                 'gpid' => $groupe->id,
                 'pid' => $contact->id,
             ]);
         } else {
             // Le groupe n'existe pas, vous pouvez gérer cette situation en conséquence
         }
     
         // Redirigez ou effectuez d'autres opérations après avoir ajouté le contact
        return redirect('contact')->with('flash_message', 'contact addedd');
         // ...
     }



/**
    public function store(Request $request)
    {
        //
    }

    
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::find($id);
        return view('contact.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'contact update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'contact delete');
    }

  

  

    
    
    // ..........................................................
    
    public function export()
    {
        // Récupérer les données de contact
        $contacts = Contact::all();
    
        // Créer le contenu CSV en tant que chaîne de caractères
        $csvContent = "Nom,Numéro de téléphone,Email,Code du groupe,Tags\n";
    
        // Ajouter les données de chaque contact
        foreach ($contacts as $contact) {
            $groupCodes = $contact->groupes->pluck('code')->implode(', '); // Obtenir les codes des groupes séparés par des virgules
            $csvContent .= "{$contact->name},{$contact->mobile},{$contact->email},{$groupCodes},{$contact->tags}\n";
        }
    
        // Définir le chemin du fichier de sortie
        $filePath = 'contacts.csv';
    
        try {
            // Écrire le contenu CSV dans le fichier de sortie
            Storage::disk('local')->put($filePath, $csvContent);
    
            // Télécharger le fichier CSV
            return response()->download(storage_path('app/' . $filePath))->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            // Afficher un message d'erreur en cas d'échec de l'écriture du fichier
            return back()->withError("Une erreur s'est produite lors de l'exportation des contacts.");
        }
    }


    

    public function imp()
    {
       
        return view('contact.import');
    }



    
 
    public function import(Request $request)
    {
        // Vérifier si un fichier a été téléchargé
        if ($request->hasFile('file')) {
            // Récupérer le fichier
            $file = $request->file('file');

            // Lire le contenu du fichier
            $data = $this->readFile($file);

            // Importer les données dans les tables correspondantes
            foreach ($data as $row) {
                // Enregistrer les champs 'name', 'mobile', 'email' et 'tags' dans la table 'playsms_featurePhonebook'
                $contact = new Contact();
                $contact->name = $row['name'];
                $contact->mobile = $row['mobile'];
                $contact->email = $row['email'];
                $contact->tags = $row['tags'];
                $contact->save();

                // Enregistrer le champ 'code du groupe' dans la table 'playsms_featurePhonebook_group'
                $group = new Groupe();
                $group->code = $row['code'];
                $group->save();

                // Enregistrer la relation entre le contact et le groupe dans la table 'playsms_featurePhonebook_group_contacts'
                $groupContact = new ContactGroupe();
                $groupContact->pid = $contact->id;
                $groupContact->gpid = $group->id;
                $groupContact->save();
            }

            // Rediriger ou afficher un message de succès
            return redirect()->back()->with('success', 'Importation réussie !');
        }

        // Rediriger ou afficher un message d'erreur
        return redirect()->back()->with('error', 'Aucun fichier téléchargé.');
    }

    private function readFile($file)
    {
        // Ouvrir le fichier CSV et lire son contenu
    $contents = file_get_contents($file->getPathname());

    // Diviser les lignes du fichier
    $rows = explode(PHP_EOL, $contents);

    // Récupérer les en-têtes (première ligne)
    $headers = str_getcsv(array_shift($rows));

    // Initialiser le tableau de données
    $data = [];

    // Parcourir les lignes restantes et les ajouter au tableau de données
    foreach ($rows as $row) {
        $data[] = array_combine($headers, str_getcsv($row));
    }

    // Importer les données dans les tables correspondantes
    foreach ($data as $row) {
        // Enregistrer les champs 'name', 'mobile', 'email' et 'tags' dans la table 'playsms_featurePhonebook'
        $contact = Contact::create([
            'name' => $row['name'],
            'mobile' => $row['mobile'],
            'email' => $row['email'],
            'tags' => $row['tags'],
        ]);

        // Enregistrer le champ 'code du groupe' dans la table 'playsms_featurePhonebook_group'
        $group = Groupe::create([
            'code' => $row['code'],
        ]);

        // Enregistrer la relation entre le contact et le groupe dans la table 'playsms_featurePhonebook_group_contacts'
        ContactGroupe::create([
            'pid' => $contact->id,
            'gpid' => $group->id,
        ]);
    }

    return $data;
    }
    


}
