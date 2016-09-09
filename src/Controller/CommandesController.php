<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Commandes Controller
 *
 * @property \App\Model\Table\CommandesTable $Commandes
 */
class CommandesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $commandes = $this->paginate($this->Commandes);

        $this->set(compact('commandes'));
        $this->set('_serialize', ['commandes']);
    }

    /**
     * View method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commande = $this->Commandes->get($id, [
            'contain' => []
        ]);

        $this->set('commande', $commande);
        $this->set('_serialize', ['commande']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commande = $this->Commandes->newEntity();
        if ($this->request->is('post')) {
            $commande = $this->Commandes->patchEntity($commande, $this->request->data);
            if ($this->Commandes->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commande could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('commande'));
        $this->set('_serialize', ['commande']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commande = $this->Commandes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commande = $this->Commandes->patchEntity($commande, $this->request->data);
            if ($this->Commandes->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commande could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('commande'));
        $this->set('_serialize', ['commande']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commande = $this->Commandes->get($id);
        if ($this->Commandes->delete($commande)) {
            $this->Flash->success(__('The commande has been deleted.'));
        } else {
            $this->Flash->error(__('The commande could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
