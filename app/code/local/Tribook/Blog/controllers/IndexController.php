<?php
class Tribook_Blog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        /*
         * Create new blog post with author and title
         * -this will create new row in tribook_blog_post_entity table and
         *  two entries for title and author attributes will be saved in tribook_blog_post_entity_varchar table
         */
        $post = Mage::getModel('tribook_blog/post');
        $post->setTitle('Test title');
        $post->setAuthor('Zoran Šalamun');
        $post->setDescription('This is a description');
        $post->setEnable(1);
        $post->save();

        
        /*
         * Getting posts collection
         * -also load collection
         * -this will load all post entries but without attributes
         * -loaded data is only from tribook_blog_post_entity table
         */
        $posts = Mage::getModel('tribook_blog/post')->getCollection();
        $posts->load();
        var_dump($posts);

        /*
         * Getting post collection
         * -load all posts
         * -set attributs to be in collection data
         */
        $posts = Mage::getModel('tribook_blog/post')->getCollection()
            ->addAttributeToSelect('title')
            ->addAttributeToSelect('author')
            ->addAttributeToSelect('description')
            ->addAttributeToSelect('enable');
        $posts->load();
        var_dump($posts);

        /*
         * Load signle post
         * -loading single post will get all attributes that we have set for post
         */
        $post = Mage::getModel('tribook_blog/post')->load(1);
        var_dump($post);
    }
}