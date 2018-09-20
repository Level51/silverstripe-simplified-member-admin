<?php

namespace lvl51\sma;

/**
 * Simple member admin, without groups, roles etc.
 *
 * @package lvl51\sma
 */
class MemberAdmin extends \ModelAdmin {
    private static $managed_models = [\Member::class];
    private static $menu_icon = 'simplified-member-admin/img/icon-member-admin.png';
    private static $url_segment = 'member';
    public $showImportForm = false;

    public function getEditForm($id = null, $fields = null) {
        $form = parent::getEditForm($id = null, $fields = null);

        $gridField = $form->Fields()->fieldByName($this->modelClass);
        $config = $gridField->getConfig();

        if (SimplifiedMemberAdmin::conf()->disable_export)
            $config->removeComponentsByType('GridFieldExportButton');

        if (SimplifiedMemberAdmin::conf()->disable_print)
            $config->removeComponentsByType('GridFieldPrintButton');

        return $form;
    }
}