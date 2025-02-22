<?php
/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_note extends DokuWiki_Action_Plugin {

    /**
     * register the eventhandlers
     *
     * @author Andreas Gohr <andi@splitbrain.org>
     */
    function register(Doku_Event_Handler $controller){
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'handle_toolbar', array ());
    }

    function handle_toolbar(&$event, $param) {
        $event->data[] = array (
            'type' => 'picker',
            'title' => $this->getLang('note_picker'),
            'icon' => '../../plugins/note/images/note_picker.png',
            'list' => array(
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_note'),
                    'icon'   => '../../plugins/note/images/tb_note.png',
                    'open'   => '<note>',
                    'close'  => '</note>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_tip'),
                    'icon'   => '../../plugins/note/images/tb_tip.png',
                    'open'   => '<note tip>',
                    'close'  => '</note>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_important'),
                    'icon'   => '../../plugins/note/images/tb_important.png',
                    'open'   => '<note important>',
                    'close'  => '</note>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_warning'),
                    'icon'   => '../../plugins/note/images/tb_warning.png',
                    'open'   => '<note warning>',
                    'close'  => '</note>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_order'),
                    'icon'   => '../../plugins/note/images/tb_order.png',
                    'open'   => '<note order>',
                    'close'  => '</note>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_xhtmlonly'),
                    'icon'   => '../../plugins/note/images/tb_xhtmlonly.png',
                    'open'   => '<note xhtmlonly>',
                    'close'  => '</note>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_deprecated'),
                    'icon'   => '../../plugins/note/images/tb_deprecated.png',
                    'open'   => '<note deprecated>',
                    'close'  => '</note>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('tb_todo'),
                    'icon'   => '../../plugins/note/images/tb_todo.png',
                    'open'   => '<note todo>',
                    'close'  => '</note>',
                ),
            )
        );
    }
}
