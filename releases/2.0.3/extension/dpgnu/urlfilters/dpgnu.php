<?php

class dPGNU extends eZURLAliasFilter
{
    function dPGNU()
    {
    }

    function process( $text, &$languageObject, &$caller )
    {
        if ( $caller instanceof eZContentObjectTreeNode )
        {
            $ini = eZINI::instance( 'dpgnu.ini' );
            $classes = $ini->variable( 'GNUSettings', 'Classes' );
            $ignoreChildrenOf = $ini->variable( 'GNUSettings', 'IgnoreChildrenOf' );
            if ( in_array( $caller->attribute( 'class_identifier' ), $classes ) && !in_array( $caller->attribute('parent_node_id'), $ignoreChildrenOf ) )
            {
                $sep  = eZCharTransform::wordSeparator();
                $text .= $sep . $caller->attribute( 'node_id' );
            }
        }
        return $text;
    }
}

?>