<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;


class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studyProgram1 = StudyProgram::create(['study_program_name' => 'aplikovaná ekológia a environmentalistika','academic_year_id'=>1]);

        $Subject1 = Subject::create(['subject_name'=>'Úvod do štúdia ekológie a environmentalistiky']);
        $Subject2 = Subject::create(['subject_name'=>'Základy geológie']);
        $Subject3 = Subject::create(['subject_name'=>'Základy pedológie']);
        $Subject4 = Subject::create(['subject_name'=>'Základy GIS pre environmentalistov']);
        $Subject5 = Subject::create(['subject_name'=>'Ekológia jedincov, populácií a spoločenstiev']);
        $Subject6 = Subject::create(['subject_name'=>'Základy klimatológie a hydrológie']);
        $Subject7 = Subject::create(['subject_name'=>'Základy botaniky a dendrológie']);
        $Subject8 = Subject::create(['subject_name'=>'Základy geomorfológie']);
        $Subject9 = Subject::create(['subject_name'=>'Základy chémie a laboratórna prax']);
        $Subject10 = Subject::create(['subject_name'=>'Angličtina pre environmentalistov']);
        $Subject11 = Subject::create(['subject_name'=>'Základy zoológie']);
        $Subject12 = Subject::create(['subject_name'=>'Primárny sektor a životné prostredie']);
        $Subject13 = Subject::create(['subject_name'=>'Sekundárny sektor, nevýrobná sféra a životné prostredie']);
        $Subject14 = Subject::create(['subject_name'=>'Biogeografia']);
        $Subject15 = Subject::create(['subject_name'=>'Právo v životnom prostredí']);
        $Subject16 = Subject::create(['subject_name'=>'Ekológia ekosystémov Zeme a Slovenska']);
        $Subject17 = Subject::create(['subject_name'=>'Prírodná krajina - typizácia a manažment']);
        $Subject18 = Subject::create(['subject_name'=>'Spracovanie priestorových údajov v GIS']);
        $Subject19 = Subject::create(['subject_name'=>'Štatistika pre nematematikov']);
        $Subject20 = Subject::create(['subject_name'=>'Základy terénneho výskumu (terénna prax)']);
        $Subject21 = Subject::create(['subject_name'=>'Socio-ekonomická krajina a plánovanie rozvoja']);
        $Subject22 = Subject::create(['subject_name'=>'Globálna ekológia a ekológia krajiny']);
        $Subject23 = Subject::create(['subject_name'=>'Životné prostredie a environmentálne problémy SR']);
        $Subject24 = Subject::create(['subject_name'=>'Manažment životného prostredia']);
        $Subject25 = Subject::create(['subject_name'=>'Ochrana prírody, krajiny a ekologické siete']);
        $Subject26 = Subject::create(['subject_name'=>'Environmentálny monitoring']);

        $studyProgram1->subjects()->attach([
            $Subject1->id,$Subject2->id,$Subject3->id,$Subject4->id,$Subject5->id,$Subject6->id,$Subject7->id,$Subject8->id,$Subject9->id,$Subject10->id,$Subject11->id,$Subject12->id,$Subject13->id,$Subject14->id,
            $Subject15->id,$Subject16->id,$Subject17->id,$Subject18->id,$Subject19->id,$Subject20->id,$Subject21->id,$Subject22->id,$Subject23->id,$Subject24->id,$Subject25->id,$Subject26->id
        ]);
        $studyProgram2 = StudyProgram::create(['study_program_name' => 'aplikovaná informatika','academic_year_id'=>1]);
        $studyProgram3 = StudyProgram::create(['study_program_name' => 'biológia','academic_year_id'=>1]);
        $studyProgram4 = StudyProgram::create(['study_program_name' => 'fyzika','academic_year_id'=>1]);
        $studyProgram5 = StudyProgram::create(['study_program_name' => 'matematicko-štatistické a informačné metódy v ekonómii a finančníctve','academic_year_id'=>1]);
        $studyProgram6 = StudyProgram::create(['study_program_name' => 'učiteľstvo biológie (v kombinácii)','academic_year_id'=>1]);
        $studyProgram7 = StudyProgram::create(['study_program_name' => 'učiteľstvo ekológie (v kombinácii)','academic_year_id'=>1]);
        $studyProgram8 = StudyProgram::create(['study_program_name' => 'učiteľstvo geografie (v kombinácii)','academic_year_id'=>1]);
        $studyProgram9 = StudyProgram::create(['study_program_name' => 'učiteľstvo chémie (v kombinácii)','academic_year_id'=>1]);
        $studyProgram10 = StudyProgram::create(['study_program_name' => 'učiteľstvo informatiky (v kombinácii)','academic_year_id'=>1]);
        $studyProgram11 = StudyProgram::create(['study_program_name' => 'učiteľstvo matematiky (v kombinácii)','academic_year_id'=>1]);
        $studyProgram12 = StudyProgram::create(['study_program_name' => 'učiteľstvo odborných ekonomických predmetov (v kombinácii)','academic_year_id'=>1]);
        Subject::create(['subject_name'=>'Úvod do štúdia ekológie a environmentalistiky']);
        Subject::create(['subject_name'=>'Základy geológie']);
        Subject::create(['subject_name'=>'Základy pedológie']);
        Subject::create(['subject_name'=>'Základy GIS pre environmentalistov']);
        Subject::create(['subject_name'=>'Ekológia jedincov, populácií a spoločenstiev']);
        Subject::create(['subject_name'=>'Základy klimatológie a hydrológie']);
Subject::create(['subject_name'=>'Základy botaniky a dendrológie']);
Subject::create(['subject_name'=>'Základy geomorfológie']);
Subject::create(['subject_name'=>'Základy chémie a laboratórna prax']);
Subject::create(['subject_name'=>'Angličtina pre environmentalistov']);
Subject::create(['subject_name'=>'Základy zoológie']);
Subject::create(['subject_name'=>'Primárny sektor a životné prostredie']);
Subject::create(['subject_name'=>'Sekundárny sektor, nevýrobná sféra a životné prostredie']);
Subject::create(['subject_name'=>'Biogeografia']);
Subject::create(['subject_name'=>'Právo v životnom prostredí']);
Subject::create(['subject_name'=>'Ekológia ekosystémov Zeme a Slovenska']);
Subject::create(['subject_name'=>'Prírodná krajina - typizácia a manažment']);
Subject::create(['subject_name'=>'Spracovanie priestorových údajov v GIS']);
Subject::create(['subject_name'=>'Štatistika pre nematematikov']);
Subject::create(['subject_name'=>'Základy terénneho výskumu (terénna prax)']);
Subject::create(['subject_name'=>'Socio-ekonomická krajina a plánovanie rozvoja']);
Subject::create(['subject_name'=>'Globálna ekológia a ekológia krajiny']);
Subject::create(['subject_name'=>'Životné prostredie a environmentálne problémy SR']);
Subject::create(['subject_name'=>'Manažment životného prostredia']);
Subject::create(['subject_name'=>'Ochrana prírody, krajiny a ekologické siete']);
Subject::create(['subject_name'=>'Environmentálny monitoring']);
Subject::create(['subject_name'=>'Jazyky webu']);
Subject::create(['subject_name'=>'Kódovanie a zobrazovanie informácií']);
Subject::create(['subject_name'=>'Programovanie']);
Subject::create(['subject_name'=>'Databázové systémy']);
Subject::create(['subject_name'=>'Matematické princípy spracovania jazyka a strojového učenia']);
Subject::create(['subject_name'=>'Spracovanie údajov v jazyku Python']);
Subject::create(['subject_name'=>'Úvod do počítačových systémov']);
Subject::create(['subject_name'=>'Formálne jazyky a automaty']);
Subject::create(['subject_name'=>'Úvod do softvérového inžinierstva']);
Subject::create(['subject_name'=>'Počítačové systémy']);
Subject::create(['subject_name'=>'Operačné systémy']);
Subject::create(['subject_name'=>'Počítačové siete']);
Subject::create(['subject_name'=>'Výpočtová zložitosť algoritmov']);
Subject::create(['subject_name'=>'Počítačová analýza dát']);
Subject::create(['subject_name'=>'Koncepty počítačovej bezpečnosti']);
Subject::create(['subject_name'=>'Odborná prax']);
Subject::create(['subject_name'=>'Umelá inteligencia']);
Subject::create(['subject_name'=>'Internet vecí']);
Subject::create(['subject_name'=>'Anatómia a morfológia rastlín']);
Subject::create(['subject_name'=>'Morfológia živočíchov']);
Subject::create(['subject_name'=>'Cytológia']);
Subject::create(['subject_name'=>'Všeobecná histológia živočíchov']);
Subject::create(['subject_name'=>'Mikroskopická technika']);
Subject::create(['subject_name'=>'Botanika 1']);
Subject::create(['subject_name'=>'Zoológia bezchordátov']);
Subject::create(['subject_name'=>'Základy mikrobiológie']);
Subject::create(['subject_name'=>'Metódy analýzy mikroorganizmov']);
Subject::create(['subject_name'=>'Chémia pre biológov 1']);
Subject::create(['subject_name'=>'Všeobecná ekológia']);
Subject::create(['subject_name'=>'Botanika 2']);
Subject::create(['subject_name'=>'Zoológia chordátov']);
Subject::create(['subject_name'=>'Vývinová biológia živočíchov']);
Subject::create(['subject_name'=>'Vývinová biológia rastlín']);
Subject::create(['subject_name'=>'Fyziológia živočíchov a človeka']);
Subject::create(['subject_name'=>'Molekulárna biológia']);
Subject::create(['subject_name'=>'Špeciálna histológia živočíchov']);
Subject::create(['subject_name'=>'Metódy molekulárnej biológie']);
Subject::create(['subject_name'=>'Chémia pre biológov 2']);
Subject::create(['subject_name'=>'Fyziológia rastlín']);
Subject::create(['subject_name'=>'Genetika']);
Subject::create(['subject_name'=>'Molekulárna genetika']);
Subject::create(['subject_name'=>'Fyto a zoogeografia']);
Subject::create(['subject_name'=>'Anatómia človeka']);
Subject::create(['subject_name'=>'Reprodukčná biológia človeka']);
    }
}
