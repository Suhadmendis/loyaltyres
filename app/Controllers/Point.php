<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PointModel;
 
class Point extends Controller
{
 
    public function index()
    {    
        $model = new PointModel();
 
        $data = $model->orderBy('id', 'DESC')->findAll();
        
        // return view('list', $data);



        
        echo json_encode($data);
    }    
 
    public function create()
    {    
        return view('add');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new PointModel();
		
        $data = [
            'points' => $this->request->getVar('txtPoints'),
            'user_ref'  => $this->request->getVar('txtUser_ref'),
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('point') );
    }
 
    public function edit($id = null)
    {
      
     $model = new PointModel();
 
     $data['point'] = $model->where('id', $id)->first();
 
     return view('edit', $data);
    }
 
    public function update()
    {  
 
		helper(['form', 'url']);
		 
		$model = new PointModel();

		$id = $this->request->getVar('id');

		 $data = [
			'points' => $this->request->getVar('txtPoints'),
            'user_ref'  => $this->request->getVar('txtUser_ref'),
			];

		$save = $model->update($id,$data);

		return redirect()->to( base_url('point') );
    }
 
    public function delete($id = null){
		$model = new PointModel();
		$data['user'] = $model->where('id', $id)->delete();
		return redirect()->to( base_url('point') );
    }
}

?>