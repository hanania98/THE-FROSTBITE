<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductSupply Controller
 *
 * @method \App\Model\Entity\ProductSupply[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductSupplyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productSupply = $this->paginate($this->ProductSupply);

        $this->set(compact('productSupply'));
        //echo json_encode($productSupply);
        //exit();
    }

    /**
     * View method
     *
     * @param string|null $id Product Supply id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productSupply = $this->ProductSupply->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productSupply'));
        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productSupply = $this->ProductSupply->newEmptyEntity();
        if ($this->request->is('post')) {
            $productSupply = $this->ProductSupply->patchEntity($productSupply, $this->request->getData());
            if ($this->ProductSupply->save($productSupply)) {
                $this->Flash->success(__('The product supply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product supply could not be saved. Please, try again.'));
        }
        $this->set(compact('productSupply'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Supply id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productSupply = $this->ProductSupply->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productSupply = $this->ProductSupply->patchEntity($productSupply, $this->request->getData());
            if ($this->ProductSupply->save($productSupply)) {
                $this->Flash->success(__('The product supply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product supply could not be saved. Please, try again.'));
        }
        $this->set(compact('productSupply'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Supply id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productSupply = $this->ProductSupply->get($id);
        if ($this->ProductSupply->delete($productSupply)) {
            $this->Flash->success(__('The product supply has been deleted.'));
        } else {
            $this->Flash->error(__('The product supply could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
