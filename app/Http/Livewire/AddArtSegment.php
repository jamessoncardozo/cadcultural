<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\ArtisticSegment;


class AddArtSegment extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $segmentName, $description;
    public $search = '';

    protected function rules()
    {
        return [
            'segmentName' => 'required|string|min:6',
            'description' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function edit($id)
    {
        $segments = ArtisticSegment::findOrfail($id);
        if($segments){

            $this->id = $segments->id;
            $this->segmentName = $segments->segmentName;
            $this->description = $segments->description;
        }else{
            return redirect()->to('/students');
        }
    }

    public function update()
    {
        $validatedData = $this->validate();

        ArtisticSegment::where('id',$this->id)->update([
            'segmentName' => $validatedData['segmentName'],
            'description' => $validatedData['description'],
        ]);
        session()->flash('message','Segmento artístico Atualizado com sucesso Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function delete($id)
    {
        $this->id = $id;
    }

    public function destroy()
    {
        ArtisticSegment::findOrFail($this->id)->delete();
        session()->flash('message','Segmento Excluído com Sucesso!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->segmentName = '';
        $this->description = '';
    }


    public function render()
    {

        $user = auth()->user();

        $segment = ArtisticSegment::where('user_id','like',$user->id)->orderBy('updated_at','DESC')->paginate(3);

        return view('livewire.add-art-segment',['artsegments' => $segment]);
    }
}
