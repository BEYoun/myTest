<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pieces Controller
 *
 * @property \App\Model\Table\PiecesTable $Pieces
 *
 * @method \App\Model\Entity\Piece[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PiecesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $pieces = $this->paginate($this->Pieces);

        $this->set(compact('pieces'));
    }

    /**
     * View method
     *
     * @param string|null $id Piece id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $piece = $this->Pieces->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('piece', $piece);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $piece = $this->Pieces->newEntity();
        if ($this->request->is('post')) {
            $piece = $this->Pieces->patchEntity($piece, $this->request->getData());
            if ($this->Pieces->save($piece)) {
                $this->Flash->success(__('The piece has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piece could not be saved. Please, try again.'));
        }
        $categories = $this->Pieces->Categories->find('list', ['limit' => 200]);
        $this->set(compact('piece', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Piece id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $piece = $this->Pieces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $piece = $this->Pieces->patchEntity($piece, $this->request->getData());
            if ($this->Pieces->save($piece)) {
                $this->Flash->success(__('The piece has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piece could not be saved. Please, try again.'));
        }
        $categories = $this->Pieces->Categories->find('list', ['limit' => 200]);
        $this->set(compact('piece', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Piece id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $piece = $this->Pieces->get($id);
        if ($this->Pieces->delete($piece)) {
            $this->Flash->success(__('The piece has been deleted.'));
        } else {
            $this->Flash->error(__('The piece could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
