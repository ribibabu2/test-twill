<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Models\Location;

class PropertyController extends BaseModuleController
{
    protected $moduleName = 'properties';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

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
                ->label(twillTrans('Property Name'))
                ->maxLength(100)
                ->required()
                ->note(twillTrans('Field note'))
                ->placeholder(twillTrans('Property Name'))
        )->add(

            Select::make()
                ->name('location_id')
                ->label(twillTrans('Location'))
                ->note('Select Location')
                ->required()
                ->options(
                    Location::get()->pluck('name', 'id')->all()
                )
        );
        
        return $form;
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
