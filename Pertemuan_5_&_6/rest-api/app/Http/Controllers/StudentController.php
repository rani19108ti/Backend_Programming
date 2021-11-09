<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();

        $data = [
            'message'=> 'Get all students',
            'data'=> $students
        ];

        // var_dump($students); #tes muncul di browser seperti echo
        return response()->json($data, 200);
    }

    public function store(Request $request){
        echo "Menambahkan data"; #cek run
        
        #menangkap inputan
        $input = [
            'nama'=> $request->nama,
            'nim'=> $request->nim,
            'email'=> $request->email,
            'jurusan'=> $request->jurusan

        ];

        #jalankan Model Student
        $student = Student::create($input);  #insert melalui database

        $data =[        #siapkan data
            'message' => 'Student is created',
            'data' => $student
        ];
        return response()->json($data, 201); #balikin datanya

    }

    public function show($id) 
    {
        $student = Student::find($id);
        
        if ($student){
            $data = [
                'message' => 'Get detail of a student',
                'data' => $student
            ];
    
            return response()->json($data, 200);

        } else {
            $data = [
                'message' => 'Data tidak ditemukan',
            ];
    
            return response()->json($data, 404);
        }
       

        // echo $id; #mengecek running
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if($student){
            $input = [
                'nama'=> $request->nama ?? $student->nama,
                'nim' => $request->nim ?? $student->nim,
                'email'=> $request->email ?? $student->email,
                'jurusan' => $request->jurusan ?? $student->jurusan
                /* refactor kode ketika hanya 1 bagian kode saja (nama saja,
                nim saja, email saja, atau jurusan saja yang di-update menggunakan
                $request->nama ?? $student->nama 
                cara bacanya pakai $request->nama kalau ada, kalau ngga ada pakai $student->nama) 
                bisa juga pakai update($request->all())
                */
            ];

            $student->update($input);

            $data = [
                'message' => 'Data di update',
                'data' => $student
            ];

            return response()->json($data, 200);
        }else {
            $data = [
                'message' => 'Data tidak ditemukan',
            ];
    
            return response()->json($data, 404);
        }
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if($student) {
            $student->delete();
            $data = [
                'message'=> 'Data is deleted'
            ];
            return response()->json ($data, 200);
        } 
        else 
        {
            $data = [
                'message'=> 'Data is not found'
            ];
            return response()->json($data, 404);
        }
    }
}
