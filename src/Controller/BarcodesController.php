<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Barcodes Controller
 *
 * @property \App\Model\Table\BarcodesTable $Barcodes
 */
class BarcodesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $barcodes = $this->paginate($this->Barcodes);

        $this->set(compact('barcodes'));
        $this->set('_serialize', ['barcodes']);
    }

    /**
     * View method
     *
     * @param string|null $id Barcode id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $barcode = $this->Barcodes->get($id, [
            'contain' => []
        ]);

        $this->set('barcode', $barcode);
        $this->set('_serialize', ['barcode']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $barcode = $this->Barcodes->newEntity();
        if ($this->request->is('post')) {
            $barcode = $this->Barcodes->patchEntity($barcode, $this->request->data);
            if ($this->Barcodes->save($barcode)) {
                $this->Flash->success(__('The barcode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barcode could not be saved. Please, try again.'));
        }
        $this->set(compact('barcode'));
        $this->set('_serialize', ['barcode']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Barcode id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $barcode = $this->Barcodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $barcode = $this->Barcodes->patchEntity($barcode, $this->request->data);
            if ($this->Barcodes->save($barcode)) {
                $this->Flash->success(__('The barcode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barcode could not be saved. Please, try again.'));
        }
        $this->set(compact('barcode'));
        $this->set('_serialize', ['barcode']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Barcode id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $barcode = $this->Barcodes->get($id);
        if ($this->Barcodes->delete($barcode)) {
            $this->Flash->success(__('The barcode has been deleted.'));
        } else {
            $this->Flash->error(__('The barcode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
