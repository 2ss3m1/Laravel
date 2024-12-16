<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe ;
class EtudiantController extends Controller{
public function index(){
$liste = Etudiant::orderby('nom', 'asc')->get();
return view('etudiant', compact('liste'));
}
public function create(){
    $classes=Classe::all();
    return view('create', compact( 'classes'));
}
public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',    // Utilisation correcte de =>
            'prenom' => 'required', // Utilisation correcte de =>
            'classes_id' => 'required'
        ]);

        // Création de l'étudiant
        Etudiant::create($request->all());

        // Redirection avec un message de succès
        return redirect()->route('etudiant')->with('success', 'Student created successfully.');
    }
    public function edit(Etudiant $etudiant) {

        $classes=Classe::all();
        return view('edit', compact('etudiant', 'classes'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classes_id' => 'required'
        ]);

        // Mise à jour de l'étudiant
        $etudiant->update([
            'nom' => $request->nom, // Assurez-vous que l'assignation est correcte
            'prenom' => $request->prenom,
            'classes_id' => $request->classes_id
        ]);

        // Redirection avec un message de succès
        return redirect()->route('etudiant')->with('success', 'Student updated successfully');
    }
    public function show(Etudiant $etudiant)
    {
        return view('show',compact('etudiant'));
    }
    public function delete(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiant')
                        ->with('success','Post deleted successfully');
    }

}
