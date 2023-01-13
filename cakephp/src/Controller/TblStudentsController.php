<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TblStudents Controller
 *
 * @property \App\Model\Table\TblStudentsTable $TblStudents
 * @method \App\Model\Entity\TblStudent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TblStudentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tblStudents = $this->paginate($this->TblStudents);

        $this->set(compact('tblStudents'));
    }

    /**
     * View method
     *
     * @param string|null $id Tbl Student id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tblStudent = $this->TblStudents->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tblStudent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tblStudent = $this->TblStudents->newEmptyEntity();
        if ($this->request->is('post')) {
            $tblStudent = $this->TblStudents->patchEntity($tblStudent, $this->request->getData());
            if ($this->TblStudents->save($tblStudent)) {
                $this->Flash->success(__('The tbl student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tbl student could not be saved. Please, try again.'));
        }
        $this->set(compact('tblStudent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tbl Student id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tblStudent = $this->TblStudents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tblStudent = $this->TblStudents->patchEntity($tblStudent, $this->request->getData());
            if ($this->TblStudents->save($tblStudent)) {
                $this->Flash->success(__('The tbl student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tbl student could not be saved. Please, try again.'));
        }
        $this->set(compact('tblStudent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tbl Student id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tblStudent = $this->TblStudents->get($id);
        if ($this->TblStudents->delete($tblStudent)) {
            $this->Flash->success(__('The tbl student has been deleted.'));
        } else {
            $this->Flash->error(__('The tbl student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
