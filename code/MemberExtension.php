<?php

namespace lvl51\sma;

/**
 * Member extension used to remove unused cms fields.
 *
 * @package lvl51\sma
 */
class MemberExtension extends \DataExtension {
    public function updateCMSFields(\FieldList $fields) {
        parent::updateCMSFields($fields);

        if (SimplifiedMemberAdmin::conf()->remove_member_fields)
            $fields->removeByName(SimplifiedMemberAdmin::conf()->remove_member_fields);
    }
}