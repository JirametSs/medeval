<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NurseEvalController extends Controller
{
    public function index(Request $request)
    {
        $md = $request->input('md', 'add');
        $r = $request->input('r', '');

        // Query nurse details
        $nurse = DB::table('newnurse_detail')->where('md', $r)->first();

        $nFullname = '';
        $nid = null;
        $new_md = null;
        $eval = null;
        $ndate_record = null;

        if ($nurse) {
            $nid = $nurse->id;
            $nFullname = $nurse->mr_thai . ' ' . $nurse->Fullname;
            $new_md = md5($nid);

            if ($new_md === $r) {
                $eval = DB::table('newnurse_eval')->where('recby', $nid)->first();
                $ndate_record = $eval ? $eval->date_record : null;
                if ($eval) {
                    $md = 'edit';
                }
            } else {
                $nurse = null;
            }
        }

        return view('index', compact('md', 'nurse', 'nFullname', 'nid', 'r', 'ndate_record'));
    }
}
