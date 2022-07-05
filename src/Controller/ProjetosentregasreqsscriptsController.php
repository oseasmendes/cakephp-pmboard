<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasreqsscripts Controller
 *
 * @property \App\Model\Table\ProjetosentregasreqsscriptsTable $Projetosentregasreqsscripts
 *
 * @method \App\Model\Entity\Projetosentregasreqsscript[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasreqsscriptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosentregasreqsreves']
        ];
        $projetosentregasreqsscripts = $this->paginate($this->Projetosentregasreqsscripts);

        $this->set(compact('projetosentregasreqsscripts'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasreqsscript id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->get($id, [
            'contain' => ['Projetosentregasreqsreves']
        ]);

        $this->set('projetosentregasreqsscript', $projetosentregasreqsscript);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->patchEntity($projetosentregasreqsscript, $this->request->getData());
            if ($this->Projetosentregasreqsscripts->save($projetosentregasreqsscript)) {
                $this->Flash->success(__('The projetosentregasreqsscript has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasreqsscript could not be saved. Please, try again.'));
        }
        $projetosentregasreqsreves = $this->Projetosentregasreqsscripts->Projetosentregasreqsreves->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsscript', 'projetosentregasreqsreves'));
    }

    public function addid($id = null)
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->patchEntity($projetosentregasreqsscript, $this->request->getData());
            if ($this->Projetosentregasreqsscripts->save($projetosentregasreqsscript)) {
                $this->Flash->success(__('The projetosentregasreqsscript has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosentregasreqsscript could not be saved. Please, try again.'));
        }
        $projetosentregasreqsreves = $this->Projetosentregasreqsscripts->Projetosentregasreqsreves->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsscript', 'projetosentregasreqsreves'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasreqsscript id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->patchEntity($projetosentregasreqsscript, $this->request->getData());
            if ($this->Projetosentregasreqsscripts->save($projetosentregasreqsscript)) {
                $this->Flash->success(__('The projetosentregasreqsscript has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsrefsent->projetosentregasreqsref_id]);
            }
            $this->Flash->error(__('The projetosentregasreqsscript could not be saved. Please, try again.'));
        }
        $projetosentregasreqsreves = $this->Projetosentregasreqsscripts->Projetosentregasreqsreves->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsscript', 'projetosentregasreqsreves'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasreqsscript id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->get($id);
        if ($this->Projetosentregasreqsscripts->delete($projetosentregasreqsscript)) {
            $this->Flash->success(__('The projetosentregasreqsscript has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasreqsscript could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsrefsent->projetosentregasreqsref_id]);
    }
}
