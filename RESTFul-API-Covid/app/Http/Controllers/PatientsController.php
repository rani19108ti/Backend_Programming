<?php

namespace App\Http\Controllers;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patients::all();
        $data = [
            'message' => 'Get all patients',
            'data' => $patients
        ];
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|unique:patients',
            'address' => 'required',
            'status' => [
                'required',
                Rule::in(['positive', 'recovered', 'dead']),
            ],
            'in_date_at' => 'required|date',
            'out_date_at' => 'required|date'
        ]);
        $student = Patients::create($validateData);
        $data = [
            'message' => 'Patients is created succesfully',
            'data' => $student,
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients = Patients::find($id);
        $data = [
            'message' => 'Get patients with id ' . $id,
            'data' => $patients
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patients::find($id);

        if ($patient) {
            $validateData = $request->validate([
                'name' => 'required',
                'phone' => 'required|numeric|unique:patients,phone,' . $id,
                'address' => 'required',
                'status' => [
                    'required',
                    Rule::in(['positive', 'recovered', 'dead']),
                ],
                'in_date_at' => 'required|date',
                'out_date_at' => 'required|date'
            ]);
            $patient->update($validateData);
            $data = [
                'message' => 'Patient is updated',
                'data' => $patient
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Patient not found'
            ];
            return response()->json($data, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patients::find($id);
        if ($patient) {
            $patient->delete();
            $data = [
                'message' => 'Patient is deleted'
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Patient not found'
            ];
            return response()->json($data, 404);
        }
    }

    public function search($name) 
    {
        $patients = Patients::where('name', 'LIKE', "%{$name}%")-> get() ;
        if ($patients) {
            $data = [
                'message' => 'Search patients with keyword ' . $name,
                'data' => $patients
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Patient not found'
            ];
            return response()->json($data, 404);
        }
    }

    public function positive() 
    {
        $patients = Patients::where('status', "positive")-> get() ;
        if ($patients) {
            $data = [
                'message' => 'Search positive patients ',
                'data' => $patients
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Positive patient not found'
            ];
            return response()->json($data, 404);
        }
    }

    public function recovered() 
    {
        $patients = Patients::where('status', "recovered")-> get() ;
        if ($patients) {
            $data = [
                'message' => 'Search recovered patients ',
                'data' => $patients
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Recovered patient not found'
            ];
            return response()->json($data, 404);
        }
    }

    public function dead() 
    {
        $patients = Patients::where('status', "dead")-> get() ;
        if ($patients) {
            $data = [
                'message' => 'Search dead patients ',
                'data' => $patients
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Dead patient not found'
            ];
            return response()->json($data, 404);
        }
    }
}
