<?php
class Controller_Vehiculos extends Controller_Template
{

	public function action_index()
	{
		$data['vehiculos'] = Model_Vehiculo::find('all');
		$this->template->title = "Vehiculos";
		$this->template->content = View::forge('vehiculos/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('vehiculos');

		if ( ! $data['vehiculo'] = Model_Vehiculo::find($id))
		{
			Session::set_flash('error', 'Could not find vehiculo #'.$id);
			Response::redirect('vehiculos');
		}

		$this->template->title = "Vehiculo";
		$this->template->content = View::forge('vehiculos/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Vehiculo::validate('create');

			if ($val->run())
			{
				$vehiculo = Model_Vehiculo::forge(array(
				));

				if ($vehiculo and $vehiculo->save())
				{
					Session::set_flash('success', 'Added vehiculo #'.$vehiculo->id.'.');

					Response::redirect('vehiculos');
				}

				else
				{
					Session::set_flash('error', 'Could not save vehiculo.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Vehiculos";
		$this->template->content = View::forge('vehiculos/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('vehiculos');

		if ( ! $vehiculo = Model_Vehiculo::find($id))
		{
			Session::set_flash('error', 'Could not find vehiculo #'.$id);
			Response::redirect('vehiculos');
		}

		$val = Model_Vehiculo::validate('edit');

		if ($val->run())
		{

			if ($vehiculo->save())
			{
				Session::set_flash('success', 'Updated vehiculo #' . $id);

				Response::redirect('vehiculos');
			}

			else
			{
				Session::set_flash('error', 'Could not update vehiculo #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('vehiculo', $vehiculo, false);
		}

		$this->template->title = "Vehiculos";
		$this->template->content = View::forge('vehiculos/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('vehiculos');

		if ($vehiculo = Model_Vehiculo::find($id))
		{
			$vehiculo->delete();

			Session::set_flash('success', 'Deleted vehiculo #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete vehiculo #'.$id);
		}

		Response::redirect('vehiculos');

	}

}
