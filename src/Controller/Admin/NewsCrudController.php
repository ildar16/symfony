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
        return [
            TextField::new('title'),
            TextEditorField::new('short_description'),
            TextEditorField::new('long_description'),
            DateField::new('date')->setRequired(true),
            TextField::new('author'),
            TextField::new('link_label'),
            TextField::new('link_url'),
            TextField::new('visible'),
            ImageField::new('image', 'Image')->onlyOnForms()
                ->setUploadDir('/public/images/'),
        ];
    }
}
