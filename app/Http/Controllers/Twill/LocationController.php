<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController;
use App\Http\Requests\Twill\LocationRequest;
use App\Models\Location;
use A17\Twill\Forms\Fields\Textarea;


class LocationController extends ModuleController
{
    protected $moduleName = 'locations';

    protected $moduleModel = \App\Models\Location::class;


  
    // public function create(int $parentModuleId = null): \Illuminate\Contracts\View\View
    // {
    //     $model = new Location(); // Your model
    //     $form = $this->getForm($model);  // Get the form with fields
    //     $saveUrl = route('twill.locations.store'); // Adjust this to your actual store route

    //     // Return the view with the form and the optional parentModuleId
    //     return view('admin.locations.form', [
    //         'form' => $form,
    //         'parentModuleId' => $parentModuleId,
    //         'saveUrl' => $saveUrl,  // Pass saveUrl to the view

    //     ]);
    // }

    
    //  public function store($parentModuleId = null)
    //  {
        
    //      $validatedData = app(LocationRequest::class)->validated();  // Fetch validated data from LocationRequest
 
    //      Location::create($validatedData);
 
    //      return redirect()->route('twill.locations.index')->with('success', 'Location created successfully!');
    //  }
    protected function setUpController(): void
    {

        //$this->disablePermalink();
        //$this->disablePublishing();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm($model): Form
    {
        // Add fields to the form
 
        $form =  Form::make()
            ->add(
                Input::make()->name('name')->label('Location Name')->required()
            )
            ->add(
                Input::make()->name('description')->label('Description')->type('textarea')
            );
            //dd($form);
            return $form; // Add this line
        }

        // public function formData($request)
        // {
            
        //     return [
        //         'form' => $this->getForm(new $this->moduleModel),
        //     ];
        // }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
