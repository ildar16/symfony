<?php

namespace App\Controller\Admin;

use App\Entity\News;
use Carbon\CarbonImmutable;
use Carbon\Traits\Creator;
use Cassandra\Date;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NewsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return News::class;
    }


    public function configureFields(string $pageName): iterable
    {
        $now = new CarbonImmutable();

        yield TextField::new('title');
        yield TextEditorField::new('short_description');
        yield TextEditorField::new('long_description');
        yield DateField::new('date')->setRequired(true);
        yield TextField::new('author');
        yield TextField::new('link_label');
        yield TextField::new('link_url');
        yield TextField::new('visible');
        yield ImageField::new('image', 'Image')->onlyOnForms()
            ->setUploadDir('/public/images/');
    }

}
