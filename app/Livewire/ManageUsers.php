<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public  $deleteUserModal = false;

    public ?User $currentUser;
  public function confirmDelete(User $user)
    {
        $this->currentUser = $user;

        $this->deleteUserModal = true;
    }
    public function delete()
    {
        if ($this->currentUser->exists) {
            User::find($this->currentUser->id)->delete();
            $this->currentUser = null;
        }
        $this->deleteUserModal = false;
    }
    public function render()
    {
        return view('livewire.manage-users')
            ->with('users', User::all());
    }
}
