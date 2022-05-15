<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

/**
 * Dashboards Controller
 *
 * @method \App\Model\Entity\Dashboard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize() : void 
    {
        parent::initialize();
 //       $this->viewBuilder()->setLayout('admin');
        
        $this->loadModel('Projetos');
        $this->loadModel('Projetosblockpoints');
        $this->loadModel('Fivewthreehs');



    }

 //use Cake\Datasource\ModelAwareTrait;
    public function index()
    {
        $blkPoints = $this->Projetosblockpoints->find('all', [
                     'conditions' => ['Projetosblockpoints.statusfuncional_id =' => 11],
                       // 'order' => 'Articles.created DESC'
                ]);
        $numberBlockpoints = $blkPoints->count();



        $openProjects = $this->Projetos->find('all', [
                     'conditions' => [
                            'arquivo = '=>false,
                            'propostatecnica = '=>true,
                            'ativo = '=>true,
                            'statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]
                        ],
                ]);
        $openProject = $openProjects->count();


        $openPoints = $this->Fivewthreehs->find('all', [
                     'conditions' => [                            
                            'statusfuncional_id = '=> 11
                        ],
                ]);
        $openPoint = $openPoints->count();




        $this->set(compact("numberBlockpoints","openProject","openPoint"));



        $this->set("title","SaesChurchMng");
    }

  
}

