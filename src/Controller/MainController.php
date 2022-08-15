<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Uuid;


class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        
        return $this->render('main/index.html.twig', [
            'categories' => $categoriesRepository->findBy([], ['categoryOrder' => 'asc']),
    
        ]);
    }
}

/**
 * $namespace = Uuid::NAMESPACE_DNS; //6ba7b810-9dad-11d1-80b4-00c04fd430c8
  *      $name = 'Ursion60';
  *      $uuid = Uuid::fromString(Uuid::v3(NAMESPACE_DNS, $name));
 * public const NAMESPACE_DNS = '6ba7b810-9dad-11d1-80b4-00c04fd430c8';
 *   public const NAMESPACE_URL = '6ba7b811-9dad-11d1-80b4-00c04fd430c8';
 *   public const NAMESPACE_OID = '6ba7b812-9dad-11d1-80b4-00c04fd430c8';
 *   public const NAMESPACE_X500 = '6ba7b814-9dad-11d1-80b4-00c04fd430c8';
 * 
 * 
 * 
 * final public static function v3(self $namespace, string $name): UuidV3
 *   {
 *       // don't use uuid_generate_md5(), some versions are buggy
 *       $uuid = md5(hex2bin(str_replace('-', '', $namespace->uid)).$name, true);
 *       return new UuidV3(self::format($uuid, '-3'));
 *   }
*
 * 
 * 
 * 
 * 
 * private static function format(string $uuid, string $version): string
 *   {
 *       $uuid[8] = $uuid[8] & "\x3F" | "\x80";
 *       $uuid = substr_replace(bin2hex($uuid), '-', 8, 0);
 *       $uuid = substr_replace($uuid, $version, 13, 1);
 *       $uuid = substr_replace($uuid, '-', 18, 0);
 *       return substr_replace($uuid, '-', 23, 0);
  *  }


 */
