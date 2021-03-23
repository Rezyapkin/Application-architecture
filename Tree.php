<?php

class BinaryNode
{
    public $value;
    public $left = null;
    public $right = null;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }


    public function insert(int $int)
    {
        $node = new BinaryNode($int);

        if ($this->root === null) {
            $this->root = $node;
        } else {
            $this->insertNode($node, $this->root);
        }
    }

    private function insertNode(BinaryNode $node, &$rootSubtree)
    {
        if ($rootSubtree === null) {
            $rootSubtree = $node;
        } elseif ($rootSubtree->value < $node->value) {
            $this->insertNode($node, $rootSubtree->right);
        } else {
            $this->insertNode($node, $rootSubtree->left);
        }
    }

    public function delete(int $int)
    {
        if ($this->root === null) {
            throw new Exception("Дерево пустое");
        }

        $node = &$this->findNode($int, $this->root);

        if ($node) {
            $this->deleteNode($node);
        } else {
            echo "Число не найдено";
        }
    }

    private function &findNode(int $int, ?BinaryNode &$rootSubtree): ?BinaryNode
    {
        if ($rootSubtree === null || $rootSubtree->value == $int) {
            return $rootSubtree;
        }

        if ($rootSubtree->value > $int) {
            return $this->findNode($int, $rootSubtree->left);
        }
        return $this->findNode($int, $rootSubtree->right);

    }

    private function deleteNode(BinaryNode $node)
    {
        if (is_null($node->right) && is_null($node->left)) {
            $node = null;
        } elseif (is_null($node->left)) {
            $node = $node->right;
        } elseif (is_null($node->right)) {
            $node = $node->left;
        }

        // [1 2 3 4 5] 7 [ 8 9 10]

        else {
            if (is_null($node->right->left)) {
                $node -> $node->left;
            } else {
                $node->value = $node->right->left->value;
                $this->deleteNode($node->right->left);
            }
        }

    }

    public function bypass(string $type) {
        $this->bypassTree(mb_strtolower($type), $this->root);
    }

    //Мне кажется универсально и изящно получилось)))
    private function bypassTree(string $type, ?BinaryNode $node) {
        if (is_null($node)) return;
        

        for ($i = 0; $i < mb_strlen($type); $i++) {
            $char = mb_substr($type, $i, 1);
            switch ($char):
                case 'l':
                    $this->bypassTree($type, $node->left);
                    break;
                case 'n':
                    echo $node->value." ";
                    break;
                case 'r':
                    $this->bypassTree($type, $node->right);
                    break;
            endswitch;
        
        }
    }

}


$tree = new BinaryTree();

$tree->insert(5);
$tree->insert(3);
$tree->insert(4);
$tree->insert(2);
$tree->insert(1);
$tree->insert(0);
$tree->insert(7);
$tree->insert(6);
$tree->insert(8);

$tree->delete(5);

//print_r($tree);