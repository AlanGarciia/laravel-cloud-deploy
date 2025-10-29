<?php

namespace App\Http\Controllers;

use App\Models\Cicle;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('id','asc')->paginate(10);
        return view('students.index', ['students' => $students] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar el que he fet adalt
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|unique:students,email|min:4',
            'address' => 'required|string|max:255|min:5',
            'dataN' => 'required|date',
            'tel' => 'required|string'
        ]);

        $alumne = new Student();;
        $alumne->name = $request->name;
        $alumne->email = $request->email;
        $alumne->address = $request->address;
        $alumne->data = $request->dataN;
        $alumne->tel = $request->tel;
        $alumne->save();
        
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $students = Student::findOrFail($id);
        return view('students.show', ['id' => $id, 'student' => $students]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        //findOrFail es per agafar sol 1, en aquest cas id
        $students = Student::findOrFail($id);

        //retorna al edit cuant li dones a Editar
        return view('students.edit', ['id' => $id, 'student' => $students] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->data = $request->data;
        $student->tel = $request->tel;
        $student->save();

        
        //Validar el que he fet adalt
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string|max:255',
            'data' => 'required|date',
            'tel' => 'required|string'
        ]);


        //Retorna al index i surt el missatge de actualitzat correctament
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $student = Student::findOrFail($id)->delete();        
        return redirect()->route('student.index');
    }

    public function matricular(Cicle $cicle){
    $user = Auth::user();

    //Está el igual = ja que no em deixaba ja que tenia mal posat el nom a la taula, 
    //i per no canviar-ho tot, el vaig possar el igual per que em reconegues
    if ($user->student) {
        $user->student->ciclo_id = $cicle->id;
        $user->student->save();
    }
    return redirect()->route('dashboard');
    }

}
