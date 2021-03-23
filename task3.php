<?php

include 'Tree.php';

class CompareTree {

    public static function compare(BinaryTree $tree1, BinaryTree $tree2):bool {
        return self::compareNode($tree1->root, $tree2->root);
    }

    private static function compareNode(?BinaryNode $node1, ?BinaryNode $node2):bool {

        if (is_null($node1) || is_null($node2)) {
            return is_null($node1) && is_null($node2);
        } elseif ($node1->value !== $node2->value) {
            return False;
        }

        return self::compareNode($node1->left, $node2->left) && self::compareNode($node1->right, $node2->right); 

    }

}


$tree2 = $tree->cloneTree();
echo "<h2>Дерево 1</h2>";
var_dump($tree);
echo "<h2>Дерево 2</h2>";
var_dump($tree2);
echo "<br> Результат сравнения: " . (CompareTree::compare($tree, $tree2) ? "Истина" : "Ложь");

echo "<h2>Дерево 1</h2>";
var_dump($tree);
echo "<h2>Дерево 2</h2>";
$tree2->delete(0);
var_dump($tree2);
echo "<br> Результат сравнения: " . (CompareTree::compare($tree, $tree2) ? "Истина" : "Ложь");