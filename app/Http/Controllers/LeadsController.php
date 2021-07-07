<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use App\Models\Project;
use Helper\Constants\CommonValidations;
use Helper\Core\HelperController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadsController extends HelperController
{

    public function index()
    {
        $list=Leads::with('project')->get();
        return $this->respond($list,[],'admin.leads.list');
    }


    public function createForm()
    {
        $projects=Project::all();
        return $this->respond($projects,[],'admin.leads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|View|JsonResponse|RedirectResponse
     */
    public function createLeads(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'businessName'=>CommonValidations::NAME,
            'customerName'=>CommonValidations::NAME,
            'phoneNumber1'=>CommonValidations::PHONE,
            'phoneNumber2'=>CommonValidations::NAME,
            'contactName'=>CommonValidations::NAME,
            'contactNumber'=>CommonValidations::PHONE,
            'address'=>CommonValidations::TEXT,
            'note'=>CommonValidations::TEXT,
            'interestLevel'=>CommonValidations::INTEGER,
            'reminderDate'=>CommonValidations::DATE,
            'amountInstallation'=>CommonValidations::DESC,
            'amountMonthly'=>CommonValidations::DESC,
            'productId'=>CommonValidations::ID,
            'images'=>CommonValidations::SOMETIMES
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $host = $request->getSchemeAndHttpHost();
        $leads = new Leads();
        $leads->businessName=$request->businessName;
        $leads->customerName=$request->customerName;
        $leads->phoneNumber1=$request->customerPhone1;
        $leads->phoneNumber2=$request->customerPhone2;
        $leads->contactName=$request->contactName;
        $leads->contactNumber=$request->contactNumber;
        $leads->address=$request->address;
        $leads->note=$request->notes;
        $leads->interestLevel=$request->interest;
        $leads->reminderDate=$request->reminderDate;
        $leads->amountInstallation=$request->amountInstallation;
        $leads->amountMonthly=$request->amountMonthly;
        $leads->productId=$request->productId;
        if ($request->hasfile('images')) {
//            $data=array();
//
//            foreach ($request->file('images') as $file) {
//                $name = $host."/public/".time().".". $file->getClientOriginalExtension();
//                $file->move(public_path().'/images',$name);
//                $data[]=$name;
//            }
//            $leads->images=json_encode($data);
            $name = $host."/images/leadImages/".time().".". $request->file('images')->getClientOriginalExtension();
            $request->file('images')->move(public_path().'/images/leadImages/',$name);
            $leads->images=$name;
        }

        $leads->save();
        if (!self::isAPI()){
            $data=Leads::with('project')->get();
           $request->session()->flash('message','Lead information save successful');
            return redirect()->route('leads.index',compact('data'));
        }else{
            return $this->respond($leads,[],'');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|JsonResponse|View
     */
    public function deactivate($id)
    {
        $leads =Leads::find($id);
        $leads->activities=false;
        $leads->save();
        return $this->respond($leads,[],'admin.leads.list');

    }
    public function editForm($id)
    {
        $leadData=Leads::find($id);
        $projects=Project::all();
        $data=[
          'leadsData'=>$leadData,
            'projects'=>$projects
        ];
        return $this->respond($data,[],'admin.leads.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Leads $leads
     * @return Application|Factory|View|JsonResponse|RedirectResponse
     */
    public function updateLeads(Request $request, $id)
    {
            $validator=Validator::make($request->all(),[
            'businessName'=>CommonValidations::NAME,
            'customerName'=>CommonValidations::NAME,
            'phoneNumber1'=>CommonValidations::PHONE,
            'phoneNumber2'=>CommonValidations::NAME,
            'contactName'=>CommonValidations::NAME,
            'contactNumber'=>CommonValidations::PHONE,
            'address'=>CommonValidations::TEXT,
            'note'=>CommonValidations::TEXT,
            'interestLevel'=>CommonValidations::INTEGER,
            'reminderDate'=>CommonValidations::DATE,
            'amountInstallation'=>CommonValidations::DESC,
            'amountMonthly'=>CommonValidations::DESC,
            'productId'=>CommonValidations::ID,
            'images'=>CommonValidations::SOMETIMES
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $host = $request->getSchemeAndHttpHost();
        $leads =Leads::find($id);
        $leads->businessName=$request->businessName;
        $leads->customerName=$request->customerName;
        $leads->phoneNumber1=$request->customerPhone1;
        $leads->phoneNumber2=$request->customerPhone2;
        $leads->contactName=$request->contactName;
        $leads->contactNumber=$request->contactNumber;
        $leads->address=$request->address;
        $leads->note=$request->notes;
        $leads->interestLevel=$request->interest;
        $leads->reminderDate=$request->reminderDate;
        $leads->amountInstallation=$request->amountInstallation;
        $leads->amountMonthly=$request->amountMonthly;
        $leads->productId=$request->productId;
        if ($request->hasfile('images')) {
//            $data=array();
//
//            foreach ($request->file('images') as $file) {
//                $name = $host."/public/".time().".". $file->getClientOriginalExtension();
//                $file->move(public_path().'/images',$name);
//                $data[]=$name;
//            }
//            $leads->images=json_encode($data);
            $name = $host."/images/leadImages/".time().".". $request->file('images')->getClientOriginalExtension();
            $request->file('images')->move(public_path().'/images/leadImages/',$name);
            $leads->images=$name;
        }

        $leads->save();
        if (!self::isAPI()){
            $data=Leads::with('project')->get();
            $request->session()->flash('message','Lead information Update successful');
            return redirect()->route('leads.index',compact('data'));
        }else{
            return $this->respond($leads,[],'');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Application|Factory|JsonResponse|View
     */
    public function delete($id)
    {
        Leads::destroy($id);
        $list=Project::all();
        return $this->respond($list,[],'admin.leads.list');

    }

}
