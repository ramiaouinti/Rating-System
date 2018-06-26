<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_authtoken_postauthtokens
        if ($pathinfo === '/auth-tokens') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_app_authtoken_postauthtokens;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::postAuthTokensAction',  '_route' => 'app_authtoken_postauthtokens',);
        }
        not_app_authtoken_postauthtokens:

        if (0 === strpos($pathinfo, '/countries')) {
            // app_country_getcountries
            if ($pathinfo === '/countries') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_country_getcountries;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CountryController::getCountriesAction',  '_route' => 'app_country_getcountries',);
            }
            not_app_country_getcountries:

            // app_country_getcountry
            if (preg_match('#^/countries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_country_getcountry;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_country_getcountry')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::getCountryAction',));
            }
            not_app_country_getcountry:

            // app_country_postcountries
            if ($pathinfo === '/countries') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_country_postcountries;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CountryController::postCountriesAction',  '_route' => 'app_country_postcountries',);
            }
            not_app_country_postcountries:

            // app_country_removecountry
            if (preg_match('#^/countries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_app_country_removecountry;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_country_removecountry')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::removeCountryAction',));
            }
            not_app_country_removecountry:

            // app_country_updatecountry
            if (preg_match('#^/countries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_app_country_updatecountry;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_country_updatecountry')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::updateCountryAction',));
            }
            not_app_country_updatecountry:

            // app_country_patchcountry
            if (preg_match('#^/countries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_app_country_patchcountry;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_country_patchcountry')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::patchCountryAction',));
            }
            not_app_country_patchcountry:

        }

        if (0 === strpos($pathinfo, '/Rating')) {
            if (0 === strpos($pathinfo, '/Rating/Cou')) {
                if (0 === strpos($pathinfo, '/Rating/Country')) {
                    // app_datacountry_getdatabases
                    if ($pathinfo === '/Rating/Country') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datacountry_getdatabases;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DataCountryController::getDataBasesAction',  '_route' => 'app_datacountry_getdatabases',);
                    }
                    not_app_datacountry_getdatabases:

                    // app_datacountry_getdatabase
                    if (preg_match('#^/Rating/Country/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datacountry_getdatabase;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_datacountry_getdatabase')), array (  '_controller' => 'AppBundle\\Controller\\DataCountryController::getDataBaseAction',));
                    }
                    not_app_datacountry_getdatabase:

                }

                // app_datacountry_gettes
                if ($pathinfo === '/Rating/Cou') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_datacountry_gettes;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DataCountryController::getTesAction',  '_route' => 'app_datacountry_gettes',);
                }
                not_app_datacountry_gettes:

            }

            // app_datacountry_gettes1
            if ($pathinfo === '/Ratings/cou') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_datacountry_gettes1;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DataCountryController::getTes1Action',  '_route' => 'app_datacountry_gettes1',);
            }
            not_app_datacountry_gettes1:

            if (0 === strpos($pathinfo, '/Rating/Dis')) {
                if (0 === strpos($pathinfo, '/Rating/District')) {
                    // app_datadistrict_getdatabases
                    if ($pathinfo === '/Rating/District') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datadistrict_getdatabases;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DataDistrictController::getDataBasesAction',  '_route' => 'app_datadistrict_getdatabases',);
                    }
                    not_app_datadistrict_getdatabases:

                    // app_datadistrict_getdatabase
                    if (preg_match('#^/Rating/District/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datadistrict_getdatabase;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_datadistrict_getdatabase')), array (  '_controller' => 'AppBundle\\Controller\\DataDistrictController::getDataBaseAction',));
                    }
                    not_app_datadistrict_getdatabase:

                }

                // app_datadistrict_gettes
                if ($pathinfo === '/Rating/Dis') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_datadistrict_gettes;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DataDistrictController::getTesAction',  '_route' => 'app_datadistrict_gettes',);
                }
                not_app_datadistrict_gettes:

            }

            // app_datadistrict_gettes1
            if ($pathinfo === '/Ratings/Dis') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_datadistrict_gettes1;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DataDistrictController::getTes1Action',  '_route' => 'app_datadistrict_gettes1',);
            }
            not_app_datadistrict_gettes1:

            if (0 === strpos($pathinfo, '/Rating/Fed')) {
                if (0 === strpos($pathinfo, '/Rating/Federal')) {
                    // app_datafederal_getdatabases
                    if ($pathinfo === '/Rating/Federal') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datafederal_getdatabases;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DataFederalController::getDataBasesAction',  '_route' => 'app_datafederal_getdatabases',);
                    }
                    not_app_datafederal_getdatabases:

                    // app_datafederal_getdatabase
                    if (preg_match('#^/Rating/Federal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datafederal_getdatabase;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_datafederal_getdatabase')), array (  '_controller' => 'AppBundle\\Controller\\DataFederalController::getDataBaseAction',));
                    }
                    not_app_datafederal_getdatabase:

                }

                // app_datafederal_gettes
                if ($pathinfo === '/Rating/Fed') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_datafederal_gettes;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DataFederalController::getTesAction',  '_route' => 'app_datafederal_gettes',);
                }
                not_app_datafederal_gettes:

            }

            // app_datafederal_gettes1
            if ($pathinfo === '/Ratings/Fed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_datafederal_gettes1;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DataFederalController::getTes1Action',  '_route' => 'app_datafederal_gettes1',);
            }
            not_app_datafederal_gettes1:

            if (0 === strpos($pathinfo, '/Rating/Mun')) {
                if (0 === strpos($pathinfo, '/Rating/Municipality')) {
                    // app_datamunicipality_getdatabases
                    if ($pathinfo === '/Rating/Municipality') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datamunicipality_getdatabases;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DataMunicipalityController::getDataBasesAction',  '_route' => 'app_datamunicipality_getdatabases',);
                    }
                    not_app_datamunicipality_getdatabases:

                    // app_datamunicipality_getdatabase
                    if (preg_match('#^/Rating/Municipality/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_datamunicipality_getdatabase;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_datamunicipality_getdatabase')), array (  '_controller' => 'AppBundle\\Controller\\DataMunicipalityController::getDataBaseAction',));
                    }
                    not_app_datamunicipality_getdatabase:

                }

                // app_datamunicipality_gettes
                if ($pathinfo === '/Rating/Mun') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_datamunicipality_gettes;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DataMunicipalityController::getTesAction',  '_route' => 'app_datamunicipality_gettes',);
                }
                not_app_datamunicipality_gettes:

            }

            if (0 === strpos($pathinfo, '/Ratings')) {
                // app_datamunicipality_gettes1
                if ($pathinfo === '/Ratings/Mun') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_datamunicipality_gettes1;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DataMunicipalityController::getTes1Action',  '_route' => 'app_datamunicipality_gettes1',);
                }
                not_app_datamunicipality_gettes1:

                // app_datamunicipality_gettest2222
                if ($pathinfo === '/Ratingss/Mun') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_datamunicipality_gettest2222;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DataMunicipalityController::getTest2222Action',  '_route' => 'app_datamunicipality_gettest2222',);
                }
                not_app_datamunicipality_gettest2222:

            }

            if (0 === strpos($pathinfo, '/Rating/Pro')) {
                if (0 === strpos($pathinfo, '/Rating/Province')) {
                    // app_dataprovince_getdatabases
                    if ($pathinfo === '/Rating/Province') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_dataprovince_getdatabases;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DataProvinceController::getDataBasesAction',  '_route' => 'app_dataprovince_getdatabases',);
                    }
                    not_app_dataprovince_getdatabases:

                    // app_dataprovince_getdatabase
                    if (preg_match('#^/Rating/Province/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_app_dataprovince_getdatabase;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_dataprovince_getdatabase')), array (  '_controller' => 'AppBundle\\Controller\\DataProvinceController::getDataBaseAction',));
                    }
                    not_app_dataprovince_getdatabase:

                }

                // app_dataprovince_gettes
                if ($pathinfo === '/Rating/Pro') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_dataprovince_gettes;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DataProvinceController::getTesAction',  '_route' => 'app_dataprovince_gettes',);
                }
                not_app_dataprovince_gettes:

            }

            // app_dataprovince_gettes1
            if ($pathinfo === '/Ratings/Pro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_dataprovince_gettes1;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DataProvinceController::getTes1Action',  '_route' => 'app_dataprovince_gettes1',);
            }
            not_app_dataprovince_gettes1:

        }

        if (0 === strpos($pathinfo, '/dates')) {
            // app_date_getdates
            if ($pathinfo === '/dates') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_date_getdates;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DateController::getDatesAction',  '_route' => 'app_date_getdates',);
            }
            not_app_date_getdates:

            // app_date_getdate
            if (preg_match('#^/dates/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_date_getdate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_date_getdate')), array (  '_controller' => 'AppBundle\\Controller\\DateController::getDateAction',));
            }
            not_app_date_getdate:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/districts')) {
            // app_district_getdistricts
            if ($pathinfo === '/districts') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_district_getdistricts;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DistrictController::getDistrictsAction',  '_route' => 'app_district_getdistricts',);
            }
            not_app_district_getdistricts:

            // app_district_getdistrict
            if (preg_match('#^/districts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_district_getdistrict;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_district_getdistrict')), array (  '_controller' => 'AppBundle\\Controller\\DistrictController::getDistrictAction',));
            }
            not_app_district_getdistrict:

        }

        if (0 === strpos($pathinfo, '/federales')) {
            // app_federal_getfederales
            if ($pathinfo === '/federales') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_federal_getfederales;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FederalController::getFederalesAction',  '_route' => 'app_federal_getfederales',);
            }
            not_app_federal_getfederales:

            // app_federal_getfederal
            if (preg_match('#^/federales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_federal_getfederal;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_federal_getfederal')), array (  '_controller' => 'AppBundle\\Controller\\FederalController::getFederalAction',));
            }
            not_app_federal_getfederal:

        }

        if (0 === strpos($pathinfo, '/municipalities')) {
            // app_municipality_getmunicipalities
            if ($pathinfo === '/municipalities') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_municipality_getmunicipalities;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MunicipalityController::getMunicipalitiesAction',  '_route' => 'app_municipality_getmunicipalities',);
            }
            not_app_municipality_getmunicipalities:

            // app_municipality_getmunicipality
            if (preg_match('#^/municipalities/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_municipality_getmunicipality;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_municipality_getmunicipality')), array (  '_controller' => 'AppBundle\\Controller\\MunicipalityController::getMunicipalityAction',));
            }
            not_app_municipality_getmunicipality:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/places')) {
                // app_place_getplaces
                if ($pathinfo === '/places') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_place_getplaces;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PlaceController::getPlacesAction',  '_route' => 'app_place_getplaces',);
                }
                not_app_place_getplaces:

                // app_place_getplace
                if (preg_match('#^/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_place_getplace;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_place_getplace')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController::getPlaceAction',));
                }
                not_app_place_getplace:

                // app_place_postplaces
                if ($pathinfo === '/places') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_place_postplaces;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PlaceController::postPlacesAction',  '_route' => 'app_place_postplaces',);
                }
                not_app_place_postplaces:

                // app_place_removeplace
                if (preg_match('#^/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_app_place_removeplace;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_place_removeplace')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController::removePlaceAction',));
                }
                not_app_place_removeplace:

                // app_place_updateplace
                if (preg_match('#^/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_place_updateplace;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_place_updateplace')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController::updatePlaceAction',));
                }
                not_app_place_updateplace:

                // app_place_patchplace
                if (preg_match('#^/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_app_place_patchplace;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_place_patchplace')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController::patchPlaceAction',));
                }
                not_app_place_patchplace:

                // app_place_price_getprices
                if (preg_match('#^/places/(?P<id>[^/]++)/prices$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_place_price_getprices;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_place_price_getprices')), array (  '_controller' => 'AppBundle\\Controller\\Place\\PriceController::getPricesAction',));
                }
                not_app_place_price_getprices:

                // app_place_price_postprices
                if (preg_match('#^/places/(?P<id>[^/]++)/prices$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_place_price_postprices;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_place_price_postprices')), array (  '_controller' => 'AppBundle\\Controller\\Place\\PriceController::postPricesAction',));
                }
                not_app_place_price_postprices:

            }

            if (0 === strpos($pathinfo, '/provinces')) {
                // app_province_getprovinces
                if ($pathinfo === '/provinces') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_province_getprovinces;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProvinceController::getProvincesAction',  '_route' => 'app_province_getprovinces',);
                }
                not_app_province_getprovinces:

                // app_province_getprovince
                if (preg_match('#^/provinces/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_province_getprovince;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_province_getprovince')), array (  '_controller' => 'AppBundle\\Controller\\ProvinceController::getProvinceAction',));
                }
                not_app_province_getprovince:

            }

        }

        if (0 === strpos($pathinfo, '/themes')) {
            // app_theme_getthemes
            if ($pathinfo === '/themes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_theme_getthemes;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ThemeController::getThemesAction',  '_route' => 'app_theme_getthemes',);
            }
            not_app_theme_getthemes:

            // app_theme_gettheme
            if (preg_match('#^/themes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_theme_gettheme;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_theme_gettheme')), array (  '_controller' => 'AppBundle\\Controller\\ThemeController::getThemeAction',));
            }
            not_app_theme_gettheme:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // app_user_postusers
            if ($pathinfo === '/users') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_user_postusers;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::postUsersAction',  '_route' => 'app_user_postusers',);
            }
            not_app_user_postusers:

            // app_user_updateuser
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_app_user_updateuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_updateuser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updateUserAction',));
            }
            not_app_user_updateuser:

            // app_user_patchuser
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_app_user_patchuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_patchuser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::patchUserAction',));
            }
            not_app_user_patchuser:

        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/documentation') && preg_match('#^/documentation(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        // post_auth_tokens
        if ($pathinfo === '/auth-tokens') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_auth_tokens;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::postAuthTokensAction',  '_format' => NULL,  '_route' => 'post_auth_tokens',);
        }
        not_post_auth_tokens:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
