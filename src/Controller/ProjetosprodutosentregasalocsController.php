<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosentregasalocs Controller
 *
 * @property \App\Model\Table\ProjetosprodutosentregasalocsTable $Projetosprodutosentregasalocs
 *
 * @method \App\Model\Entity\Projetosprodutosentregasaloc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosentregasalocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Projetosprodutosentregas', 'Statusfuncionals']
        ];
        $projetosprodutosentregasalocs = $this->paginate($this->Projetosprodutosentregasalocs);

        $this->set(compact('projetosprodutosentregasalocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosentregasaloc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->get($id, [
            'contain' => ['Consultores','Competencias', 'Projetosprodutosentregas', 'Statusfuncionals']
        ]);

        $this->set('projetosprodutosentregasaloc', $projetosprodutosentregasaloc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addnew()
    {
        $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->patchEntity($projetosprodutosentregasaloc, $this->request->getData());
            if ($this->Projetosprodutosentregasalocs->save($projetosprodutosentregasaloc)) {
                $this->Flash->success(__('The projetosprodutosentregasaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregasaloc could not be saved. Please, try again.'));
        }
        $consultores = $this->Projetosprodutosentregasalocs->Consultores->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosprodutosentregasalocs->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosentregasalocs->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasaloc', 'consultores', 'projetosprodutosentregas', 'statusfuncionals'));
    }

     public function add($id = null)
    {
        $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->patchEntity($projetosprodutosentregasaloc, $this->request->getData());

            $projetosprodutosentregasaloc->projetosprodutosentrega_id = $id;

            if ($this->Projetosprodutosentregasalocs->save($projetosprodutosentregasaloc)) {
                $this->Flash->success(__('The projetosprodutosentregasaloc has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosentregasaloc could not be saved. Please, try again.'));
        }
        
        $consultores = $this->Projetosprodutosentregasalocs->Consultores->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 2000]);


        


        $projetosprodutosentregas = $this->Projetosprodutosentregasalocs->Projetosprodutosentregas->find('list', array('order' => array('descricao' => 'asc')),['limit' => 2000]);
        $statusfuncionals = $this->Projetosprodutosentregasalocs->Statusfuncionals->find('list', array('order' => array('descricao' => 'asc')) ,['limit' => 200]);
        $this->set(compact('projetosprodutosentregasaloc', 'consultores', 'projetosprodutosentregas', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosentregasaloc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->patchEntity($projetosprodutosentregasaloc, $this->request->getData());
            if ($this->Projetosprodutosentregasalocs->save($projetosprodutosentregasaloc)) {
                $this->Flash->success(__('The projetosprodutosentregasaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregasaloc could not be saved. Please, try again.'));
        }
        $consultores = $this->Projetosprodutosentregasalocs->Consultores->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosprodutosentregasalocs->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosentregasalocs->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasaloc', 'consultores', 'projetosprodutosentregas', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosentregasaloc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosentregasaloc = $this->Projetosprodutosentregasalocs->get($id);
        if ($this->Projetosprodutosentregasalocs->delete($projetosprodutosentregasaloc)) {
            $this->Flash->success(__('The projetosprodutosentregasaloc has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosentregasaloc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
