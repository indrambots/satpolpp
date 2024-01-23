<?php

namespace App\Traits\DataTable;

use Livewire\WithPagination;

trait WithPerPagePagination
{
    use WithPagination;
    public $perPage = 10;
    // protected $paginationTheme = 'bootstrap';

    public function initializeWithPerPagePagination()
    {
        $this->perPage = session()->get('perPage', $this->perPage);
    }

    public function updatedPerPage($value)
    {
        session()->put('perPage', $value);
    }

    public function applyPagination($query)
    {
        return $query->paginate($this->perPage);
    }
}
