<?php

namespace App\Http\Controllers;


use App\Repository\MemberRepository;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private $_memberRepository;


    public function __construct()
    {
        $this->_memberRepository = new MemberRepository();
    }

    public function index(Request $request)
    {
        $data = $request->all();
        $quantity =  $request->get('quantity') ? (int)$request->get('quantity') : 1 ;
        for ($i = 0 ; $i< $quantity ; $i++)
        {
            $this->_memberRepository->create($data);
        }
        return view();
    }
    public function getMember(Request $request)
    {
        $group_id = $request->get('group_id');
        $member =  $this->_memberRepository->getMember($group_id);
        return response()->json([
            'data' => $member
        ]);
    }
}