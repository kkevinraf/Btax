<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/langue/update')) {
                // langue_update
                if (preg_match('#^/langue/update/(?P<langue>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_update')), array (  '_controller' => 'Langue\\LangueBundle\\Controller\\LangueController::updateAction',));
                }

                // langue_update_home
                if (0 === strpos($pathinfo, '/langue/update/home') && preg_match('#^/langue/update/home/(?P<langue>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_update_home')), array (  '_controller' => 'Langue\\LangueBundle\\Controller\\LangueController::updateHomeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }

                    // fos_user_security_check
                    if ($pathinfo === '/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/logout') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // utilisateur_creat_user
        if ($pathinfo === '/utilisateur_creat_user') {
            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateurController::addAction',  '_route' => 'utilisateur_creat_user',);
        }

        // index_user
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\IndexController::indexAction',  '_route' => 'index_user',);
        }

        if (0 === strpos($pathinfo, '/book')) {
            // book_cooperative
            if ($pathinfo === '/book/cooperative') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::cooperativeAction',  '_route' => 'book_cooperative',);
            }

            // book_reservation
            if ($pathinfo === '/book/reservation') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::reservationAction',  '_route' => 'book_reservation',);
            }

            if (0 === strpos($pathinfo, '/book/itineraire')) {
                // book_itineraire
                if ($pathinfo === '/book/itineraire') {
                    return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::itineraireAction',  '_route' => 'book_itineraire',);
                }

                // book_filter_itineraire
                if ($pathinfo === '/book/itineraire/filter') {
                    return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::itineraireFilterAction',  '_route' => 'book_filter_itineraire',);
                }

            }

            // book_recherche
            if ($pathinfo === '/book/recherche') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::rechercheAction',  '_route' => 'book_recherche',);
            }

            // book_myaccount
            if ($pathinfo === '/book/myaccount') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::myaccountAction',  '_route' => 'book_myaccount',);
            }

            // book_detailcooperative
            if (preg_match('#^/book/(?P<id>[^/]++)/cooperative$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_detailcooperative')), array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::detailCooperativeAction',));
            }

            // book_add_avis
            if ($pathinfo === '/book/addavis') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::addAvisAction',  '_route' => 'book_add_avis',);
            }

            // book_update_avis
            if ($pathinfo === '/book/updateavis') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::updateAvisAction',  '_route' => 'book_update_avis',);
            }

            // book_all_avis
            if (0 === strpos($pathinfo, '/book/allavis') && preg_match('#^/book/allavis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_all_avis')), array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::allAvisAction',));
            }

            if (0 === strpos($pathinfo, '/book/notification')) {
                // book_notification
                if ($pathinfo === '/book/notification') {
                    return array (  '_controller' => 'Book\\BookBundle\\Controller\\NotificationController::indexAction',  '_route' => 'book_notification',);
                }

                // book_notification_search
                if (0 === strpos($pathinfo, '/book/notification/search') && preg_match('#^/book/notification/search/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_notification_search')), array (  '_controller' => 'Book\\BookBundle\\Controller\\NotificationController::notificationSearchAction',));
                }

            }

            if (0 === strpos($pathinfo, '/book/search')) {
                // run_search
                if (rtrim($pathinfo, '/') === '/book/search') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'run_search');
                    }

                    return array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::runSearchAction',  '_route' => 'run_search',);
                }

                // run_search_select
                if (preg_match('#^/book/search/(?P<id>[^/]++)/select$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'run_search_select')), array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::selectTrajetAction',));
                }

                // reservation_set_session
                if (0 === strpos($pathinfo, '/book/search/setsession') && preg_match('#^/book/search/setsession/(?P<id>[^/]++)/(?P<nom>[^/]++)/(?P<place>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_set_session')), array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::setSessionAction',));
                }

                if (0 === strpos($pathinfo, '/book/search/re')) {
                    // reservation_register
                    if (0 === strpos($pathinfo, '/book/search/registersession') && preg_match('#^/book/search/registersession/(?P<id>[^/]++)/(?P<trajet>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_register')), array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::registerSessionAction',));
                    }

                    // reservation_after_paiement
                    if ($pathinfo === '/book/search/reservationAfterPaiement') {
                        return array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::reservationAfterPaiementAction',  '_route' => 'reservation_after_paiement',);
                    }

                }

                // reservation_get_session
                if ($pathinfo === '/book/search/getsession') {
                    return array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::getSessionAction',  '_route' => 'reservation_get_session',);
                }

                // reservation_delete_session
                if ($pathinfo === '/book/search/deletesession') {
                    return array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::deleteSessionAction',  '_route' => 'reservation_delete_session',);
                }

                // register_search
                if (0 === strpos($pathinfo, '/book/search/searchRegister') && preg_match('#^/book/search/searchRegister/(?P<data>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_search')), array (  '_controller' => 'Book\\BookBundle\\Controller\\NotificationController::searchRegisterAction',));
                }

                // testsession
                if (0 === strpos($pathinfo, '/book/search/testsession') && preg_match('#^/book/search/testsession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'testsession')), array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::testSessionAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/paiement')) {
            // paiement_log_out
            if (preg_match('#^/paiement/(?P<id>[^/]++)/select$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_log_out')), array (  '_controller' => 'Book\\BookBundle\\Controller\\PaiementController::selectLogOutAction',));
            }

            // paiement_credit_card
            if ($pathinfo === '/paiement/cc') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\PaiementController::creditCardAction',  '_route' => 'paiement_credit_card',);
            }

            // paiement_paypal
            if ($pathinfo === '/paiement/ppl') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\PaiementController::paypalAction',  '_route' => 'paiement_paypal',);
            }

            // paiement_mobile_money
            if ($pathinfo === '/paiement/mm') {
                return array (  '_controller' => 'Book\\BookBundle\\Controller\\PaiementController::mobileMoneyAction',  '_route' => 'paiement_mobile_money',);
            }

            // paiement_set_session
            if (0 === strpos($pathinfo, '/paiement/setsession') && preg_match('#^/paiement/setsession/(?P<id>[^/]++)/(?P<nom>[^/]++)/(?P<place>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_set_session')), array (  '_controller' => 'Book\\BookBundle\\Controller\\PaiementController::registerSessionAction',));
            }

        }

        // search_log_out
        if (rtrim($pathinfo, '/') === '/searchLogOut') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'search_log_out');
            }

            return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::searchLogOutAction',  '_route' => 'search_log_out',);
        }

        // book_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'book_homepage');
            }

            return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::indexAction',  '_route' => 'book_homepage',);
        }

        // cooperative_getplace
        if (0 === strpos($pathinfo, '/getplacecoop') && preg_match('#^/getplacecoop/(?P<cooperative>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooperative_getplace')), array (  '_controller' => 'Book\\BookBundle\\Controller\\SearchController::getPlaceCooperativeAction',));
        }

        if (0 === strpos($pathinfo, '/sadmin')) {
            if (0 === strpos($pathinfo, '/sadmin/btax')) {
                if (0 === strpos($pathinfo, '/sadmin/btax/localisation')) {
                    // localisation
                    if (rtrim($pathinfo, '/') === '/sadmin/btax/localisation') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'localisation');
                        }

                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LocalisationAdminController::indexAction',  '_route' => 'localisation',);
                    }

                    // localisation_show
                    if (preg_match('#^/sadmin/btax/localisation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'localisation_show')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LocalisationAdminController::showAction',));
                    }

                    // localisation_new
                    if ($pathinfo === '/sadmin/btax/localisation/new') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LocalisationAdminController::newAction',  '_route' => 'localisation_new',);
                    }

                    // localisation_create
                    if ($pathinfo === '/sadmin/btax/localisation/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_localisation_create;
                        }

                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LocalisationAdminController::createAction',  '_route' => 'localisation_create',);
                    }
                    not_localisation_create:

                    // localisation_edit
                    if (preg_match('#^/sadmin/btax/localisation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'localisation_edit')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LocalisationAdminController::editAction',));
                    }

                    // localisation_update
                    if (preg_match('#^/sadmin/btax/localisation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_localisation_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'localisation_update')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LocalisationAdminController::updateAction',));
                    }
                    not_localisation_update:

                    // localisation_delete
                    if (preg_match('#^/sadmin/btax/localisation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_localisation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'localisation_delete')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LocalisationAdminController::deleteAction',));
                    }
                    not_localisation_delete:

                }

                if (0 === strpos($pathinfo, '/sadmin/btax/cooperative')) {
                    // cooperative
                    if (rtrim($pathinfo, '/') === '/sadmin/btax/cooperative') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cooperative');
                        }

                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\CooperativeAdminController::indexAction',  '_route' => 'cooperative',);
                    }

                    // cooperative_show
                    if (preg_match('#^/sadmin/btax/cooperative/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooperative_show')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\CooperativeAdminController::showAction',));
                    }

                    // cooperative_new
                    if ($pathinfo === '/sadmin/btax/cooperative/new') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\CooperativeAdminController::newAction',  '_route' => 'cooperative_new',);
                    }

                    // cooperative_create
                    if ($pathinfo === '/sadmin/btax/cooperative/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_cooperative_create;
                        }

                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\CooperativeAdminController::createAction',  '_route' => 'cooperative_create',);
                    }
                    not_cooperative_create:

                    // cooperative_edit
                    if (preg_match('#^/sadmin/btax/cooperative/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooperative_edit')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\CooperativeAdminController::editAction',));
                    }

                    // cooperative_update
                    if (preg_match('#^/sadmin/btax/cooperative/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_cooperative_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooperative_update')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\CooperativeAdminController::updateAction',));
                    }
                    not_cooperative_update:

                    // cooperative_delete
                    if (preg_match('#^/sadmin/btax/cooperative/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_cooperative_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooperative_delete')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\CooperativeAdminController::deleteAction',));
                    }
                    not_cooperative_delete:

                }

                if (0 === strpos($pathinfo, '/sadmin/btax/link')) {
                    // btax_link_itineraire
                    if ($pathinfo === '/sadmin/btax/link/itineraire') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LinkAdminBtaxController::listItineraireAction',  '_route' => 'btax_link_itineraire',);
                    }

                    // btax_link_myaccount
                    if ($pathinfo === '/sadmin/btax/link/myaccount') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\LinkAdminBtaxController::myAccountAction',  '_route' => 'btax_link_myaccount',);
                    }

                }

                if (0 === strpos($pathinfo, '/sadmin/btax/member')) {
                    // member_search
                    if ($pathinfo === '/sadmin/btax/member/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_member_search;
                        }

                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\MembreBtaxController::searchMembreAction',  '_route' => 'member_search',);
                    }
                    not_member_search:

                    // membre_show
                    if (preg_match('#^/sadmin/btax/member/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_show')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\MembreBtaxController::detailsMembreAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/sadmin/btax/trajet/trajet')) {
                    if (0 === strpos($pathinfo, '/sadmin/btax/trajet/trajet/search')) {
                        // adminbtax_searchtrajet
                        if ($pathinfo === '/sadmin/btax/trajet/trajet/search') {
                            return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\TrajetAdminBtaxController::searchAction',  '_route' => 'adminbtax_searchtrajet',);
                        }

                        // trajet_run_search
                        if ($pathinfo === '/sadmin/btax/trajet/trajet/search/run') {
                            return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\TrajetAdminBtaxController::runSearchAction',  '_route' => 'trajet_run_search',);
                        }

                    }

                    // adminbtax_detailtrajet
                    if (0 === strpos($pathinfo, '/sadmin/btax/trajet/trajet/detail') && preg_match('#^/sadmin/btax/trajet/trajet/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminbtax_detailtrajet')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\TrajetAdminBtaxController::detailSearchAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/sadmin/btax/avis')) {
                    if (0 === strpos($pathinfo, '/sadmin/btax/avis/to')) {
                        // adminbtax_avis_tovalidate
                        if ($pathinfo === '/sadmin/btax/avis/tovalidate') {
                            return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\AvisAdminBtaxController::toValidateAction',  '_route' => 'adminbtax_avis_tovalidate',);
                        }

                        // adminbtax_avis_tomoderate
                        if ($pathinfo === '/sadmin/btax/avis/tomoderate') {
                            return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\AvisAdminBtaxController::toModerateAction',  '_route' => 'adminbtax_avis_tomoderate',);
                        }

                    }

                    // avis_validate
                    if (0 === strpos($pathinfo, '/sadmin/btax/avis/validate') && preg_match('#^/sadmin/btax/avis/validate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_validate')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\AvisAdminBtaxController::validateAction',));
                    }

                    // avis_delete
                    if (0 === strpos($pathinfo, '/sadmin/btax/avis/delete') && preg_match('#^/sadmin/btax/avis/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_delete')), array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\AvisAdminBtaxController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/sadmin/btax/reservation/search')) {
                    // adminbtax_reservation_search
                    if ($pathinfo === '/sadmin/btax/reservation/search') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\ReservationAdminBtaxController::searchAction',  '_route' => 'adminbtax_reservation_search',);
                    }

                    // adminbtax_reservation_searchadvanced
                    if ($pathinfo === '/sadmin/btax/reservation/searchadvanced') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\ReservationAdminBtaxController::searchAdvancedAction',  '_route' => 'adminbtax_reservation_searchadvanced',);
                    }

                    // adminbtax_reservation_searchrun
                    if ($pathinfo === '/sadmin/btax/reservation/search/run') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\ReservationAdminBtaxController::searchRunAction',  '_route' => 'adminbtax_reservation_searchrun',);
                    }

                    // adminbtax_reservation_searchadvancedrun
                    if ($pathinfo === '/sadmin/btax/reservation/searchadvanced/run') {
                        return array (  '_controller' => 'Btax\\BtaxBundle\\Controller\\ReservationAdminBtaxController::searchAdvancedRunAction',  '_route' => 'adminbtax_reservation_searchadvancedrun',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/sadmin/cooperative')) {
                if (0 === strpos($pathinfo, '/sadmin/cooperative/voiture')) {
                    // voiture
                    if (rtrim($pathinfo, '/') === '/sadmin/cooperative/voiture') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'voiture');
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\VoitureAdminController::indexAction',  '_route' => 'voiture',);
                    }

                    // voiture_show
                    if (preg_match('#^/sadmin/cooperative/voiture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiture_show')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\VoitureAdminController::showAction',));
                    }

                    // voiture_new
                    if ($pathinfo === '/sadmin/cooperative/voiture/new') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\VoitureAdminController::newAction',  '_route' => 'voiture_new',);
                    }

                    // voiture_create
                    if ($pathinfo === '/sadmin/cooperative/voiture/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_voiture_create;
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\VoitureAdminController::createAction',  '_route' => 'voiture_create',);
                    }
                    not_voiture_create:

                    // voiture_edit
                    if (preg_match('#^/sadmin/cooperative/voiture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiture_edit')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\VoitureAdminController::editAction',));
                    }

                    // voiture_update
                    if (preg_match('#^/sadmin/cooperative/voiture/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_voiture_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiture_update')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\VoitureAdminController::updateAction',));
                    }
                    not_voiture_update:

                    // voiture_delete
                    if (preg_match('#^/sadmin/cooperative/voiture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_voiture_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiture_delete')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\VoitureAdminController::deleteAction',));
                    }
                    not_voiture_delete:

                }

                if (0 === strpos($pathinfo, '/sadmin/cooperative/place')) {
                    // place
                    if (rtrim($pathinfo, '/') === '/sadmin/cooperative/place') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'place');
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\PlaceAdminController::indexAction',  '_route' => 'place',);
                    }

                    // place_show
                    if (preg_match('#^/sadmin/cooperative/place/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_show')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\PlaceAdminController::showAction',));
                    }

                    // place_new
                    if ($pathinfo === '/sadmin/cooperative/place/new') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\PlaceAdminController::newAction',  '_route' => 'place_new',);
                    }

                    // place_create
                    if ($pathinfo === '/sadmin/cooperative/place/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_place_create;
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\PlaceAdminController::createAction',  '_route' => 'place_create',);
                    }
                    not_place_create:

                    // place_edit
                    if (preg_match('#^/sadmin/cooperative/place/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_edit')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\PlaceAdminController::editAction',));
                    }

                    // place_update
                    if (preg_match('#^/sadmin/cooperative/place/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_place_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_update')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\PlaceAdminController::updateAction',));
                    }
                    not_place_update:

                    // place_delete
                    if (preg_match('#^/sadmin/cooperative/place/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_place_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_delete')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\PlaceAdminController::deleteAction',));
                    }
                    not_place_delete:

                }

                if (0 === strpos($pathinfo, '/sadmin/cooperative/itinerairecoop')) {
                    // itinerairecoop
                    if (rtrim($pathinfo, '/') === '/sadmin/cooperative/itinerairecoop') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'itinerairecoop');
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\ItineraireCoopAdminController::indexAction',  '_route' => 'itinerairecoop',);
                    }

                    // itinerairecoop_new
                    if ($pathinfo === '/sadmin/cooperative/itinerairecoop/new') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\ItineraireCoopAdminController::newAction',  '_route' => 'itinerairecoop_new',);
                    }

                    // itinerairecoop_create1
                    if ($pathinfo === '/sadmin/cooperative/itinerairecoop/create1') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_itinerairecoop_create1;
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\ItineraireCoopAdminController::create1Action',  '_route' => 'itinerairecoop_create1',);
                    }
                    not_itinerairecoop_create1:

                }

                if (0 === strpos($pathinfo, '/sadmin/cooperative/trajet')) {
                    // trajet
                    if (rtrim($pathinfo, '/') === '/sadmin/cooperative/trajet') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'trajet');
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\TrajetAdminController::indexAction',  '_route' => 'trajet',);
                    }

                    // trajet_show
                    if (preg_match('#^/sadmin/cooperative/trajet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'trajet_show')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\TrajetAdminController::detailSearchAction',));
                    }

                    // trajet_new
                    if ($pathinfo === '/sadmin/cooperative/trajet/new') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\TrajetAdminController::newAction',  '_route' => 'trajet_new',);
                    }

                    // trajet_create
                    if ($pathinfo === '/sadmin/cooperative/trajet/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_trajet_create;
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\TrajetAdminController::createAction',  '_route' => 'trajet_create',);
                    }
                    not_trajet_create:

                    // trajet_search_coop
                    if ($pathinfo === '/sadmin/cooperative/trajet/searchrun') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_trajet_search_coop;
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\TrajetAdminController::runSearchAction',  '_route' => 'trajet_search_coop',);
                    }
                    not_trajet_search_coop:

                }

                if (0 === strpos($pathinfo, '/sadmin/cooperative/reservation/search')) {
                    // cooperative_reservation_search
                    if ($pathinfo === '/sadmin/cooperative/reservation/search') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\ReservationCooperativeController::searchAction',  '_route' => 'cooperative_reservation_search',);
                    }

                    // cooperative_reservation_searchadvanced
                    if ($pathinfo === '/sadmin/cooperative/reservation/searchadvanced') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\ReservationCooperativeController::searchAdvancedAction',  '_route' => 'cooperative_reservation_searchadvanced',);
                    }

                    // cooperative_reservation_searchrun
                    if ($pathinfo === '/sadmin/cooperative/reservation/search/run') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\ReservationCooperativeController::searchRunAction',  '_route' => 'cooperative_reservation_searchrun',);
                    }

                    // cooperative_reservation_searchadvancedrun
                    if ($pathinfo === '/sadmin/cooperative/reservation/searchadvanced/run') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\ReservationCooperativeController::searchAdvancedRunAction',  '_route' => 'cooperative_reservation_searchadvancedrun',);
                    }

                }

                if (0 === strpos($pathinfo, '/sadmin/cooperative/membre')) {
                    // member_search_cooperative
                    if (rtrim($pathinfo, '/') === '/sadmin/cooperative/membre') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'member_search_cooperative');
                        }

                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\MembreCooperativeController::searchMembreAction',  '_route' => 'member_search_cooperative',);
                    }

                    // membre_show_cooperative
                    if (preg_match('#^/sadmin/cooperative/membre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_show_cooperative')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\MembreCooperativeController::detailsMembreAction',));
                    }

                    if (0 === strpos($pathinfo, '/sadmin/cooperative/membre/avis')) {
                        // membre_avis_cooperative
                        if ($pathinfo === '/sadmin/cooperative/membre/avis') {
                            return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\MembreCooperativeController::avisMembreAction',  '_route' => 'membre_avis_cooperative',);
                        }

                        // membre_avis_signale
                        if (preg_match('#^/sadmin/cooperative/membre/avis/(?P<id>[^/]++)/signale$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_avis_signale')), array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\MembreCooperativeController::avisSignaleAction',));
                        }

                    }

                    // membre_myaccount_cooperative
                    if ($pathinfo === '/sadmin/cooperative/membre/myaccount') {
                        return array (  '_controller' => 'Cooperative\\CooperativeBundle\\Controller\\CompteAdminController::myaccountAction',  '_route' => 'membre_myaccount_cooperative',);
                    }

                }

            }

        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // testest
        if ($pathinfo === '/testest') {
            return array (  '_controller' => 'Book\\BookBundle\\Controller\\LinkController::testestAction',  '_route' => 'testest',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
