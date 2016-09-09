<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produits Controller
 *
 * @property \App\Model\Table\ProduitsTable $Produits
 */
class ProduitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $produits = $this->paginate($this->Produits);

        $this->set(compact('produits'));
        $this->set('_serialize', ['produits']);
    }

    /**
     * View method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produit = $this->Produits->get($id, [
            'contain' => []
        ]);

        $this->set('produit', $produit);
        $this->set('_serialize', ['produit']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produit = $this->Produits->newEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produits->patchEntity($produit, $this->request->data);
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produit could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('produit'));
        $this->set('_serialize', ['produit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produit = $this->Produits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produit = $this->Produits->patchEntity($produit, $this->request->data);
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produit could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('produit'));
        $this->set('_serialize', ['produit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produit = $this->Produits->get($id);
        if ($this->Produits->delete($produit)) {
            $this->Flash->success(__('The produit has been deleted.'));
        } else {
            $this->Flash->error(__('The produit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
