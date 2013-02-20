<?php

namespace Onscreen\ScreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OnscreenScreenBundle:Default:index.html.twig');
    }

    public function screenAction($name)
    {

        $screens = [
            'linda' => [
                'screens' => [
                    [
                        'id' => 'splash',
                        'rows' => [
                            [
                                'columns' => [[
                                    'type' => 'carousel',
                                    'widgets' => [
                                        [
                                            'title' => '<h4>Er du også en sucker for Open Source</h4><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>',
                                            'content' => '<div style="height:673px;overflow:hidden"><img src="/public/linda/bg1.jpg"></div>'
                                        ],
                                        [
                                            'title' => '<h4>Er du også en sucker for Open Source</h4><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p><h4>a sjdaælsdjlajsdfæ</h4><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>',
                                            'content' => '<div style="height:673px;overflow:hidden"><img src="/public/linda/bg2.jpg"></div>'
                                        ],
                                        [
                                            'title' => '<h4>Er du også en sucker for Open Source</h4><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>',
                                            'content' => '<div style="height:673px;overflow:hidden"><img src="/public/linda/bg3.jpg"></div>'
                                        ],
                                    ],
                                ],
                            ]],
                        ],
                    ],
                ],
            ],


            'test' => [
                'screens' => [
                    [
                        'id' => 'screen-1-pdl',
                        'rows' => [
                            [
                                'columns' => [
                                    ['widgets' => [[
                                        'content' => '<iframe src="https://rpm.newrelic.com/public/charts/awzsJGKappV" width="100%" height="300" scrolling="no" frameborder="no"></iframe>'
                                    ]]],
                                    ['widgets' => [[
                                        'content' => '<iframe src="https://rpm.newrelic.com/public/charts/jM0kuLn8HFX" width="100%" height="300" scrolling="no" frameborder="no"></iframe>'
                                    ]]],
                                ],
                            ],
                            [
                                'columns' => [
                                    [
                                        'type' => 'carousel',
                                        'widgets' => [
                                        [
                                            'title' => '<h4>App server response time (ms)</h4><p>lka flsdjfa lksjd falskjdafælsjaæsdkjaæl sjfkdælj</p>',
                                            'content' => '<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg">'
                                        ],
                                        [
                                            'title' => '<h4>App server response time (ms)</h4><p>lka flsdjfa lksjd falskjdafælsjaæsdkjaæl sjfkdælj</p>',
                                            'content' => '<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-01.jpg">'
                                        ],
                                        [
                                            'title' => '<h4>App server response time (ms)</h4><p>lka flsdjfa lksjd falskjdafælsjaæsdkjaæl sjfkdælj</p>',
                                            'content' => '<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg">'
                                        ],
                                    ]],
                                    ['widgets' => [[
                                        'title' => 'some static info ...',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                    // ['widgets' => [[
                                    //     'title' => 'a lsdakfaskdf',
                                    //     'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    // ]]],
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => 'screen-2-rand',
                        'rows' => [
                            [
                                'columns' => [
                                    ['widgets' => [[
                                        // 'title' => 'App server response time (ms)',
                                        'content' => '<iframe src="https://rpm.newrelic.com/public/charts/cB40sSFw3po" width="100%" height="300" scrolling="no" frameborder="no"></iframe>'
                                    ]]],
                                    ['widgets' => [[
                                        // 'title' => 'App server response time (ms)',
                                        'content' => '<iframe src="https://rpm.newrelic.com/public/charts/kGbRAGetkHV" width="100%" height="300" scrolling="no" frameborder="no"></iframe>'
                                    ]]],
                                ],
                            ],
                            [
                                'columns' => [
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                ],
                            ]
                        ],
                    ],
                    [
                        'id' => 'screen-2-rand',
                        'rows' => [
                            [
                                'columns' => [
                                    ['widgets' => [[
                                        // 'title' => 'App server response time (ms)',
                                        'content' => '<iframe src="https://rpm.newrelic.com/public/charts/cB40sSFw3po" width="100%" height="300" scrolling="no" frameborder="no"></iframe>'
                                    ]]],
                                    ['widgets' => [[
                                        // 'title' => 'App server response time (ms)',
                                        'content' => '<iframe src="https://rpm.newrelic.com/public/charts/kGbRAGetkHV" width="100%" height="300" scrolling="no" frameborder="no"></iframe>'
                                    ]]],
                                ],
                            ],
                            [
                                'columns' => [
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                    ['widgets' => [[
                                        'title' => 'a lsdakfaskdf',
                                        'content' => '<p>askd as djfasjæasæ fajældf</p>'
                                    ]]],
                                ],
                            ]
                        ],
                    ],
                ],
            ]
        ];



        return $this->render('::builder.html.twig', $screens[$name]);
    }
}
