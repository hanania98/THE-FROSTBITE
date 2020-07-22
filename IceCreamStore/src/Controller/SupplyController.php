<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Supply Controller
 *
 * @method \App\Model\Entity\Supply[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $supply = $this->paginate($this->Supply);

        $this->set(compact('supply'));
        //echo json_encode($supply);
        //exit();
    }

    /**
     * View method
     *
     * @param string|null $id Supply id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supply = $this->Supply->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('supply'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supply = $this->Supply->newEmptyEntity();
        if ($this->request->is('post')) {
            $supply = $this->Supply->patchEntity($supply, $this->request->getData());
            if ($this->Supply->save($supply)) {
                $this->Flash->success(__('The supply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supply could not be saved. Please, try again.'));
        }
        $this->set(compact('supply'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supply id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supply = $this->Supply->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supply = $this->Supply->patchEntity($supply, $this->request->getData());
            if ($this->Supply->save($supply)) {
                $this->Flash->success(__('The supply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supply could not be saved. Please, try again.'));
        }
        $this->set(compact('supply'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supply id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supply = $this->Supply->get($id);
        if ($this->Supply->delete($supply)) {
            $this->Flash->success(__('The supply has been deleted.'));
        } else {
            $this->Flash->error(__('The supply could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
