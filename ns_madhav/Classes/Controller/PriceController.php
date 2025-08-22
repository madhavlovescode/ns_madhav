<?php

declare(strict_types=1);

namespace NITSAN\NsMadhav\Controller;


use TYPO3\CMS\Core\Resource\ResourceFactory;
use NITSAN\NsMadhav\Domain\Repository\PriceRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\DataHandling\Model\RecordStateFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;
use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException;
use TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException;
use TYPO3\CMS\Extbase\Persistence\Generic\Exception\UnsupportedMethodException;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use TYPO3\CMS\Core\Log\LogManager;
use TYPO3\CMS\Core\SysLog\Action as SystemLogGenericAction;
use TYPO3\CMS\Core\SysLog\Error as SystemLogErrorClassification;
use TYPO3\CMS\Core\SysLog\Type as SystemLogType;
use TYPO3\CMS\Core\Service\FlexFormService;
use TYPO3\CMS\Core\Http\JsonResponse;

/**
 * This file is part of the "EventCrud" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025 
 */

/**
 * PriceController
 */
class PriceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * eventRepository
     *
     * @var \NITSAN\NsMadhav\Domain\Repository\PriceRepository
     */
    protected $PriceRepository = null;


    /**
     * action show
     *
     * @param \NITSAN\NsMadhav\Domain\Model\Price $price
     * @return \Psr\Http\Message\ResponseInterface
     */

    public function __construct(
        PriceRepository $PriceRepository
    
    )
    {
         $this->PriceRepository = $PriceRepository;
    }
 public function indexAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function listAction(): ResponseInterface
    {
        $price = $this->PriceRepository->findAll();
//\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($price, __FILE__.' Line No. '.__LINE__);die();
        $this->view->assign('prices', $price);
        return $this->htmlResponse();
    }

   
}
