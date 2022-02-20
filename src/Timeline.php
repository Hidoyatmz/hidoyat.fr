<?php


class Timeline {
    
    public static function getDatas($pdo){
        return $pdo->query("SELECT date FROM timeline")->fetchAll();
    }

    public static function generateCard($datas, $prefix){
        return <<<HTML
            <div class="timeline-card timeline-card-{$prefix}" data-aos="fade-up" data-aos-duration="1500" class="aos-init aos-animate">
                <h4 class="fw-bold">$datas[0]</h2>
                <p class="translate" translate="timeline-{$datas[0]}"></p>
            </div>
        HTML;
    }
}