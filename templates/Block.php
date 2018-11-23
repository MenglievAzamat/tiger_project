<?php

namespace Templates;

class Block {
    public static function generate($page) : string{
        $result = "
            <div style='display: inline-flex'>
                <div>
                    <h1>
                    <a href='../templates/page.block.template.php?id=$page->id'>" . $page->title . "</a>|
                    " . $page->tag . "|
                    " . $page->descriptions . "|
                    </h1>
                </div>
                
                <div>
                    <a href='../admin/delete.page.php?id=$page->id'>Удалить</a>|<a href='../admin/update.page.php?id=$page->id'>Редактировать</a>
                </div>
            </div>
        ";

        return $result;
    }
}