<?php


class Project {
    public static function getDatas($pdo){
        return $pdo->query("SELECT * FROM projects")->fetchAll();
    }

    public static function generateCard($datas){
        $dev = "";
        $icons = explode(",",$datas['langages']);
        $demo = " ";
        $slugName = explode("/",$datas['img'])[2];
        if(intval($datas['demo'])===1){
            $demo = '<a href="/demos/' . strtolower($datas['name']) . '/" target="_blank" class="btn btn-primary btn-demo"><i class="far fa-eye"></i> Voir la démo</a>';
        }
        foreach ($icons as $icon) {
            $dev .= '<i class="devicon-' . trim($icon," ") .'-plain colored"></i>';
        }
        return <<<HTML
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="https://hidoyat.fr/{$datas['img']}" alt="{$datas['name']}">
                    </div>
                    <div class="card-body position-relative">
                        <h4 class="card-title fw-bold">{$datas['name']}</h4>
                        <p class="card-text translate" translate="project-{$slugName}"></p>
                        <div class="icons-dev">
                            {$dev}
                        </div>
                        {$demo}
                    </div>
                </div>
            </div>
        HTML;
    }
}