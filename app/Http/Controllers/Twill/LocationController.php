<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;



class LocationController extends BaseModuleController
{
    protected $moduleName = 'locations';

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        
        $form = parent::getForm($model);

        $form->add(
            Input::make()
                ->name('name')
                ->label(twillTrans('Location Name'))
                ->maxLength(100)
                ->required()
                ->note(twillTrans('Field note'))
                ->placeholder(twillTrans('Location Name'))
        )->add(

            Wysiwyg::make()
                ->name('description')
                ->toolbarOptions([['header' => [1, 2, false]], 'ordered', 'bullet'])
                ->note('Main description of the Page')
                ->label('Description')
        );
        
        return $form;
    }


    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

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
