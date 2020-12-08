<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * Ps_checkout210AdminContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class Ps_checkout210AdminContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'ps_checkout.adapter.language' => 'getPsCheckout_Adapter_LanguageService',
            'ps_checkout.api.firebase.auth' => 'getPsCheckout_Api_Firebase_AuthService',
            'ps_checkout.api.firebase.auth.factory' => 'getPsCheckout_Api_Firebase_Auth_FactoryService',
            'ps_checkout.builder.payload.onboarding' => 'getPsCheckout_Builder_Payload_OnboardingService',
            'ps_checkout.configuration' => 'getPsCheckout_ConfigurationService',
            'ps_checkout.configuration.options.resolver' => 'getPsCheckout_Configuration_Options_ResolverService',
            'ps_checkout.context.prestashop' => 'getPsCheckout_Context_PrestashopService',
            'ps_checkout.context.shop' => 'getPsCheckout_Context_ShopService',
            'ps_checkout.env.segmentenv' => 'getPsCheckout_Env_SegmentenvService',
            'ps_checkout.env.sentry' => 'getPsCheckout_Env_SentryService',
            'ps_checkout.express_checkout.configuration' => 'getPsCheckout_ExpressCheckout_ConfigurationService',
            'ps_checkout.funding_source.collection' => 'getPsCheckout_FundingSource_CollectionService',
            'ps_checkout.funding_source.collection.builder' => 'getPsCheckout_FundingSource_Collection_BuilderService',
            'ps_checkout.funding_source.configuration' => 'getPsCheckout_FundingSource_ConfigurationService',
            'ps_checkout.funding_source.configuration.repository' => 'getPsCheckout_FundingSource_Configuration_RepositoryService',
            'ps_checkout.funding_source.eligibility_constraint' => 'getPsCheckout_FundingSource_EligibilityConstraintService',
            'ps_checkout.funding_source.entity' => 'getPsCheckout_FundingSource_EntityService',
            'ps_checkout.funding_source.presenter' => 'getPsCheckout_FundingSource_PresenterService',
            'ps_checkout.funding_source.provider' => 'getPsCheckout_FundingSource_ProviderService',
            'ps_checkout.funding_source.translation' => 'getPsCheckout_FundingSource_TranslationService',
            'ps_checkout.logger' => 'getPsCheckout_LoggerService',
            'ps_checkout.logger.configuration' => 'getPsCheckout_Logger_ConfigurationService',
            'ps_checkout.logger.directory' => 'getPsCheckout_Logger_DirectoryService',
            'ps_checkout.logger.factory' => 'getPsCheckout_Logger_FactoryService',
            'ps_checkout.logger.file.finder' => 'getPsCheckout_Logger_File_FinderService',
            'ps_checkout.logger.file.reader' => 'getPsCheckout_Logger_File_ReaderService',
            'ps_checkout.logger.filename' => 'getPsCheckout_Logger_FilenameService',
            'ps_checkout.logger.handler' => 'getPsCheckout_Logger_HandlerService',
            'ps_checkout.logger.handler.factory' => 'getPsCheckout_Logger_Handler_FactoryService',
            'ps_checkout.logger.sentry.handler' => 'getPsCheckout_Logger_Sentry_HandlerService',
            'ps_checkout.logger.sentry.processor' => 'getPsCheckout_Logger_Sentry_ProcessorService',
            'ps_checkout.manager.shopuuid' => 'getPsCheckout_Manager_ShopuuidService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_checkout.paypal.configuration' => 'getPsCheckout_Paypal_ConfigurationService',
            'ps_checkout.persistent.configuration' => 'getPsCheckout_Persistent_ConfigurationService',
            'ps_checkout.presenter.order.pending' => 'getPsCheckout_Presenter_Order_PendingService',
            'ps_checkout.presenter.transaction' => 'getPsCheckout_Presenter_TransactionService',
            'ps_checkout.repository.country' => 'getPsCheckout_Repository_CountryService',
            'ps_checkout.repository.order' => 'getPsCheckout_Repository_OrderService',
            'ps_checkout.repository.orderpayment' => 'getPsCheckout_Repository_OrderpaymentService',
            'ps_checkout.repository.paypal.account' => 'getPsCheckout_Repository_Paypal_AccountService',
            'ps_checkout.repository.prestashop.account' => 'getPsCheckout_Repository_Prestashop_AccountService',
            'ps_checkout.repository.pscheckoutcart' => 'getPsCheckout_Repository_PscheckoutcartService',
            'ps_checkout.sdk.paypal.linkbuilder' => 'getPsCheckout_Sdk_Paypal_LinkbuilderService',
            'ps_checkout.segment.tracker' => 'getPsCheckout_Segment_TrackerService',
            'ps_checkout.shop.provider' => 'getPsCheckout_Shop_ProviderService',
            'ps_checkout.step.live' => 'getPsCheckout_Step_LiveService',
            'ps_checkout.store.module.configuration' => 'getPsCheckout_Store_Module_ConfigurationService',
            'ps_checkout.store.module.context' => 'getPsCheckout_Store_Module_ContextService',
            'ps_checkout.store.module.firebase' => 'getPsCheckout_Store_Module_FirebaseService',
            'ps_checkout.store.module.paypal' => 'getPsCheckout_Store_Module_PaypalService',
            'ps_checkout.store.module.psx' => 'getPsCheckout_Store_Module_PsxService',
            'ps_checkout.store.store' => 'getPsCheckout_Store_StoreService',
            'ps_checkout.translations.translations' => 'getPsCheckout_Translations_TranslationsService',
            'ps_checkout.updater.paypal.account' => 'getPsCheckout_Updater_Paypal_AccountService',
        );

        $this->aliases = array();
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the 'ps_checkout.adapter.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter A PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter instance
     */
    protected function getPsCheckout_Adapter_LanguageService()
    {
        return $this->services['ps_checkout.adapter.language'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter($this->get('ps_checkout.context.shop'));
    }

    /**
     * Gets the 'ps_checkout.api.firebase.auth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth A PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth instance
     */
    protected function getPsCheckout_Api_Firebase_AuthService()
    {
        return $this->services['ps_checkout.api.firebase.auth'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth();
    }

    /**
     * Gets the 'ps_checkout.api.firebase.auth.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Firebase\AuthFactory A PrestaShop\Module\PrestashopCheckout\Api\Firebase\AuthFactory instance
     */
    protected function getPsCheckout_Api_Firebase_Auth_FactoryService()
    {
        return $this->services['ps_checkout.api.firebase.auth.factory'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\AuthFactory($this->get('ps_checkout.api.firebase.auth'), $this->get('ps_checkout.persistent.configuration'));
    }

    /**
     * Gets the 'ps_checkout.builder.payload.onboarding' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder A PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder instance
     */
    protected function getPsCheckout_Builder_Payload_OnboardingService()
    {
        return $this->services['ps_checkout.builder.payload.onboarding'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder($this->get('ps_checkout.repository.prestashop.account'), $this->get('ps_checkout.adapter.language'));
    }

    /**
     * Gets the 'ps_checkout.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration A PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration instance
     */
    protected function getPsCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration($this->get('ps_checkout.configuration.options.resolver'));
    }

    /**
     * Gets the 'ps_checkout.configuration.options.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver A PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver instance
     */
    protected function getPsCheckout_Configuration_Options_ResolverService()
    {
        return $this->services['ps_checkout.configuration.options.resolver'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver($this->get("ps_checkout.shop.provider")->getIdentifier());
    }

    /**
     * Gets the 'ps_checkout.context.prestashop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext A PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext instance
     */
    protected function getPsCheckout_Context_PrestashopService()
    {
        return $this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext();
    }

    /**
     * Gets the 'ps_checkout.context.shop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopContext A PrestaShop\Module\PrestashopCheckout\ShopContext instance
     */
    protected function getPsCheckout_Context_ShopService()
    {
        return $this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext();
    }

    /**
     * Gets the 'ps_checkout.env.segmentenv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv A PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv instance
     */
    protected function getPsCheckout_Env_SegmentenvService()
    {
        return $this->services['ps_checkout.env.segmentenv'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv();
    }

    /**
     * Gets the 'ps_checkout.env.sentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv A PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv instance
     */
    protected function getPsCheckout_Env_SentryService()
    {
        return $this->services['ps_checkout.env.sentry'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv();
    }

    /**
     * Gets the 'ps_checkout.express_checkout.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration A PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration instance
     */
    protected function getPsCheckout_ExpressCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.express_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration($this->get('ps_checkout.configuration'));
    }

    /**
     * Gets the 'ps_checkout.funding_source.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection instance
     */
    protected function getPsCheckout_FundingSource_CollectionService()
    {
        return $this->services['ps_checkout.funding_source.collection'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection($this->get("ps_checkout.funding_source.collection.builder")->create());
    }

    /**
     * Gets the 'ps_checkout.funding_source.collection.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder instance
     */
    protected function getPsCheckout_FundingSource_Collection_BuilderService()
    {
        return $this->services['ps_checkout.funding_source.collection.builder'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder($this->get('ps_checkout.funding_source.configuration'), $this->get('ps_checkout.funding_source.eligibility_constraint'));
    }

    /**
     * Gets the 'ps_checkout.funding_source.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration instance
     */
    protected function getPsCheckout_FundingSource_ConfigurationService()
    {
        return $this->services['ps_checkout.funding_source.configuration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration($this->get('ps_checkout.funding_source.configuration.repository'));
    }

    /**
     * Gets the 'ps_checkout.funding_source.configuration.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository instance
     */
    protected function getPsCheckout_FundingSource_Configuration_RepositoryService()
    {
        return $this->services['ps_checkout.funding_source.configuration.repository'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository($this->get('ps_checkout.context.prestashop'));
    }

    /**
     * Gets the 'ps_checkout.funding_source.eligibility_constraint' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint instance
     */
    protected function getPsCheckout_FundingSource_EligibilityConstraintService()
    {
        return $this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint();
    }

    /**
     * Gets the 'ps_checkout.funding_source.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity instance
     */
    protected function getPsCheckout_FundingSource_EntityService()
    {
        return $this->services['ps_checkout.funding_source.entity'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity();
    }

    /**
     * Gets the 'ps_checkout.funding_source.presenter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter instance
     */
    protected function getPsCheckout_FundingSource_PresenterService()
    {
        return $this->services['ps_checkout.funding_source.presenter'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter($this->get('ps_checkout.funding_source.translation'), $this->get('ps_checkout.repository.country'));
    }

    /**
     * Gets the 'ps_checkout.funding_source.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider instance
     */
    protected function getPsCheckout_FundingSource_ProviderService()
    {
        return $this->services['ps_checkout.funding_source.provider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider($this->get('ps_checkout.funding_source.collection.builder'), $this->get('ps_checkout.funding_source.presenter'));
    }

    /**
     * Gets the 'ps_checkout.funding_source.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider A PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider instance
     */
    protected function getPsCheckout_FundingSource_TranslationService()
    {
        return $this->services['ps_checkout.funding_source.translation'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider($this->get('ps_checkout.module'));
    }

    /**
     * Gets the 'ps_checkout.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Psr\Log\LoggerInterface A Psr\Log\LoggerInterface instance
     */
    protected function getPsCheckout_LoggerService()
    {
        return $this->services['ps_checkout.logger'] = $this->get('ps_checkout.logger.factory')->build($this->get('ps_checkout.logger.directory'));
    }

    /**
     * Gets the 'ps_checkout.logger.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration A PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration instance
     */
    protected function getPsCheckout_Logger_ConfigurationService()
    {
        return $this->services['ps_checkout.logger.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration($this->get('ps_checkout.configuration'));
    }

    /**
     * Gets the 'ps_checkout.logger.directory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory A PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory instance
     */
    protected function getPsCheckout_Logger_DirectoryService()
    {
        return $this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('!php/const _PS_VERSION_', '!php/const _PS_ROOT_DIR_');
    }

    /**
     * Gets the 'ps_checkout.logger.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory A PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory instance
     */
    protected function getPsCheckout_Logger_FactoryService()
    {
        return $this->services['ps_checkout.logger.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory($this->get("ps_checkout.module")->name, $this->get('ps_checkout.logger.handler'), $this->get('ps_checkout.logger.sentry.handler'), $this->get('ps_checkout.logger.sentry.processor'));
    }

    /**
     * Gets the 'ps_checkout.logger.file.finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder A PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder instance
     */
    protected function getPsCheckout_Logger_File_FinderService()
    {
        return $this->services['ps_checkout.logger.file.finder'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder($this->get('ps_checkout.logger.directory'), $this->get('ps_checkout.logger.filename'));
    }

    /**
     * Gets the 'ps_checkout.logger.file.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader A PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader instance
     */
    protected function getPsCheckout_Logger_File_ReaderService()
    {
        return $this->services['ps_checkout.logger.file.reader'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader();
    }

    /**
     * Gets the 'ps_checkout.logger.filename' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename A PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename instance
     */
    protected function getPsCheckout_Logger_FilenameService()
    {
        return $this->services['ps_checkout.logger.filename'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename($this->get("ps_checkout.module")->name, $this->get("ps_checkout.shop.provider")->getIdentifier());
    }

    /**
     * Gets the 'ps_checkout.logger.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\HandlerInterface A Monolog\Handler\HandlerInterface instance
     */
    protected function getPsCheckout_Logger_HandlerService()
    {
        return $this->services['ps_checkout.logger.handler'] = $this->get('ps_checkout.logger.handler.factory')->build();
    }

    /**
     * Gets the 'ps_checkout.logger.handler.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory A PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory instance
     */
    protected function getPsCheckout_Logger_Handler_FactoryService()
    {
        return $this->services['ps_checkout.logger.handler.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory($this->get("ps_checkout.logger.directory")->getPath(), $this->get("ps_checkout.logger.filename")->get(), $this->get("ps_checkout.logger.configuration")->getMaxFiles(), $this->get("ps_checkout.logger.configuration")->getLevel());
    }

    /**
     * Gets the 'ps_checkout.logger.sentry.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Sentry\SentryHandler A PrestaShop\Module\PrestashopCheckout\Sentry\SentryHandler instance
     */
    protected function getPsCheckout_Logger_Sentry_HandlerService()
    {
        return $this->services['ps_checkout.logger.sentry.handler'] = new \PrestaShop\Module\PrestashopCheckout\Sentry\SentryHandler($this->get('ps_checkout.env.sentry'));
    }

    /**
     * Gets the 'ps_checkout.logger.sentry.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Sentry\SentryProcessor A PrestaShop\Module\PrestashopCheckout\Sentry\SentryProcessor instance
     */
    protected function getPsCheckout_Logger_Sentry_ProcessorService()
    {
        return $this->services['ps_checkout.logger.sentry.processor'] = new \PrestaShop\Module\PrestashopCheckout\Sentry\SentryProcessor($this->get('ps_checkout.repository.prestashop.account'));
    }

    /**
     * Gets the 'ps_checkout.manager.shopuuid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopUuidManager A PrestaShop\Module\PrestashopCheckout\ShopUuidManager instance
     */
    protected function getPsCheckout_Manager_ShopuuidService()
    {
        return $this->services['ps_checkout.manager.shopuuid'] = new \PrestaShop\Module\PrestashopCheckout\ShopUuidManager();
    }

    /**
     * Gets the 'ps_checkout.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ps_checkout A Ps_checkout instance
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }

    /**
     * Gets the 'ps_checkout.paypal.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration A PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration instance
     */
    protected function getPsCheckout_Paypal_ConfigurationService()
    {
        return $this->services['ps_checkout.paypal.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration($this->get('ps_checkout.configuration'));
    }

    /**
     * Gets the 'ps_checkout.persistent.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PersistentConfiguration A PrestaShop\Module\PrestashopCheckout\PersistentConfiguration instance
     */
    protected function getPsCheckout_Persistent_ConfigurationService()
    {
        return $this->services['ps_checkout.persistent.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PersistentConfiguration($this->get('ps_checkout.configuration'));
    }

    /**
     * Gets the 'ps_checkout.presenter.order.pending' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Order\OrderPendingPresenter A PrestaShop\Module\PrestashopCheckout\Presenter\Order\OrderPendingPresenter instance
     */
    protected function getPsCheckout_Presenter_Order_PendingService()
    {
        return $this->services['ps_checkout.presenter.order.pending'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Order\OrderPendingPresenter();
    }

    /**
     * Gets the 'ps_checkout.presenter.transaction' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Transaction\TransactionPresenter A PrestaShop\Module\PrestashopCheckout\Presenter\Transaction\TransactionPresenter instance
     */
    protected function getPsCheckout_Presenter_TransactionService()
    {
        return $this->services['ps_checkout.presenter.transaction'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Transaction\TransactionPresenter();
    }

    /**
     * Gets the 'ps_checkout.repository.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository A PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository instance
     */
    protected function getPsCheckout_Repository_CountryService()
    {
        return $this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository();
    }

    /**
     * Gets the 'ps_checkout.repository.order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\OrderRepository A PrestaShop\Module\PrestashopCheckout\Repository\OrderRepository instance
     */
    protected function getPsCheckout_Repository_OrderService()
    {
        return $this->services['ps_checkout.repository.order'] = new \PrestaShop\Module\PrestashopCheckout\Repository\OrderRepository();
    }

    /**
     * Gets the 'ps_checkout.repository.orderpayment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\OrderPaymentRepository A PrestaShop\Module\PrestashopCheckout\Repository\OrderPaymentRepository instance
     */
    protected function getPsCheckout_Repository_OrderpaymentService()
    {
        return $this->services['ps_checkout.repository.orderpayment'] = new \PrestaShop\Module\PrestashopCheckout\Repository\OrderPaymentRepository();
    }

    /**
     * Gets the 'ps_checkout.repository.paypal.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PaypalAccountRepository A PrestaShop\Module\PrestashopCheckout\Repository\PaypalAccountRepository instance
     */
    protected function getPsCheckout_Repository_Paypal_AccountService()
    {
        return $this->services['ps_checkout.repository.paypal.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PaypalAccountRepository($this->get('ps_checkout.configuration'));
    }

    /**
     * Gets the 'ps_checkout.repository.prestashop.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository A PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository instance
     */
    protected function getPsCheckout_Repository_Prestashop_AccountService()
    {
        return $this->services['ps_checkout.repository.prestashop.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository($this->get('ps_checkout.configuration'));
    }

    /**
     * Gets the 'ps_checkout.repository.pscheckoutcart' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository A PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository instance
     */
    protected function getPsCheckout_Repository_PscheckoutcartService()
    {
        return $this->services['ps_checkout.repository.pscheckoutcart'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository();
    }

    /**
     * Gets the 'ps_checkout.sdk.paypal.linkbuilder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder A PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder instance
     */
    protected function getPsCheckout_Sdk_Paypal_LinkbuilderService()
    {
        return $this->services['ps_checkout.sdk.paypal.linkbuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder($this->get('ps_checkout.repository.paypal.account'), $this->get('ps_checkout.paypal.configuration'), $this->get('ps_checkout.funding_source.configuration.repository'));
    }

    /**
     * Gets the 'ps_checkout.segment.tracker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Segment\SegmentTracker A PrestaShop\Module\PrestashopCheckout\Segment\SegmentTracker instance
     */
    protected function getPsCheckout_Segment_TrackerService()
    {
        return $this->services['ps_checkout.segment.tracker'] = new \PrestaShop\Module\PrestashopCheckout\Segment\SegmentTracker($this->get('ps_checkout.env.segmentenv'), $this->get('ps_checkout.manager.shopuuid'));
    }

    /**
     * Gets the 'ps_checkout.shop.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider A PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider instance
     */
    protected function getPsCheckout_Shop_ProviderService()
    {
        return $this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider();
    }

    /**
     * Gets the 'ps_checkout.step.live' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep A PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep instance
     */
    protected function getPsCheckout_Step_LiveService()
    {
        return $this->services['ps_checkout.step.live'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep($this->get('ps_checkout.configuration'));
    }

    /**
     * Gets the 'ps_checkout.store.module.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule A PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule instance
     */
    protected function getPsCheckout_Store_Module_ConfigurationService()
    {
        return $this->services['ps_checkout.store.module.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule($this->get('ps_checkout.express_checkout.configuration'), $this->get('ps_checkout.paypal.configuration'), $this->get('ps_checkout.funding_source.provider'));
    }

    /**
     * Gets the 'ps_checkout.store.module.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule A PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule instance
     */
    protected function getPsCheckout_Store_Module_ContextService()
    {
        return $this->services['ps_checkout.store.module.context'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule($this->get("ps_checkout.module")->name, $this->get("ps_checkout.module")->module_key, $this->get('ps_checkout.context.prestashop'), $this->get('ps_checkout.paypal.configuration'), $this->get('ps_checkout.step.live'), $this->get('ps_checkout.translations.translations'), $this->get('ps_checkout.context.shop'), $this->get('ps_checkout.shop.provider'));
    }

    /**
     * Gets the 'ps_checkout.store.module.firebase' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\FirebaseModule A PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\FirebaseModule instance
     */
    protected function getPsCheckout_Store_Module_FirebaseService()
    {
        return $this->services['ps_checkout.store.module.firebase'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\FirebaseModule($this->get('ps_checkout.repository.prestashop.account'));
    }

    /**
     * Gets the 'ps_checkout.store.module.paypal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule A PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule instance
     */
    protected function getPsCheckout_Store_Module_PaypalService()
    {
        return $this->services['ps_checkout.store.module.paypal'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule($this->get('ps_checkout.repository.paypal.account'));
    }

    /**
     * Gets the 'ps_checkout.store.module.psx' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PsxModule A PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PsxModule instance
     */
    protected function getPsCheckout_Store_Module_PsxService()
    {
        return $this->services['ps_checkout.store.module.psx'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PsxModule($this->get('ps_checkout.context.prestashop'), $this->get('ps_checkout.repository.prestashop.account'));
    }

    /**
     * Gets the 'ps_checkout.store.store' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter A PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter instance
     */
    protected function getPsCheckout_Store_StoreService()
    {
        return $this->services['ps_checkout.store.store'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter(array(0 => $this->get('ps_checkout.store.module.context'), 1 => $this->get('ps_checkout.store.module.firebase'), 2 => $this->get('ps_checkout.store.module.paypal'), 3 => $this->get('ps_checkout.store.module.psx'), 4 => $this->get('ps_checkout.store.module.configuration')));
    }

    /**
     * Gets the 'ps_checkout.translations.translations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Translations\Translations A PrestaShop\Module\PrestashopCheckout\Translations\Translations instance
     */
    protected function getPsCheckout_Translations_TranslationsService()
    {
        return $this->services['ps_checkout.translations.translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations($this->get('ps_checkout.module'));
    }

    /**
     * Gets the 'ps_checkout.updater.paypal.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Updater\PaypalAccountUpdater A PrestaShop\Module\PrestashopCheckout\Updater\PaypalAccountUpdater instance
     */
    protected function getPsCheckout_Updater_Paypal_AccountService()
    {
        return $this->services['ps_checkout.updater.paypal.account'] = new \PrestaShop\Module\PrestashopCheckout\Updater\PaypalAccountUpdater($this->get('ps_checkout.persistent.configuration'));
    }
}
