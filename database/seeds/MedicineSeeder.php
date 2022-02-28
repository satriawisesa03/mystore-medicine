<?php

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category ke-1
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'patch 12,5 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'description' => '- Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'hidromorfon',
            'form' => 'tab lepas lambat 8 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);

        // Category ke-2
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'form' => 'susp 100 mg/5 mL',
            'restriction_formula' => '1 btl/kasus.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'ketoprofen',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);

        // Category ke-3
        DB::table('medicines')->insert([
            'generic_name' => 'alopurinol',
            'form' => 'tab 100 mg*',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'kolkisin',
            'form' => 'tab 500 mcg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'probenesid',
            'form' => 'tab 500 mg',
            'restriction_formula' => '30 tab/bulan',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);

        // Category ke-4
        DB::table('medicines')->insert([
            'generic_name' => 'amitriptilin',
            'form' => 'tab 25 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'gabapentin',
            'form' => 'kaps 100 mg',
            'restriction_formula' => '60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'karbamazepin',
            'form' => 'tab 100 mg',
            'restriction_formula' => '60 tab/bulan.',
            'description' => 'Hanya untuk neuralgia trigeminal.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);

        // Category ke-5
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain',
            'form' => 'inj 0,5%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain heavy',
            'form' => 'inj 0,5% + glukosa 8%',
            'restriction_formula' => '',
            'description' => 'Khusus untuk analgesia spinal.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'etil klorida',
            'form' => 'spray 100 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);

        // Category ke-6
        DB::table('medicines')->insert([
            'generic_name' => 'deksmedetomidin',
            'form' => 'inj 100 mcg/mL',
            'restriction_formula' => '',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'desfluran',
            'form' => 'ih',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'halotan',
            'form' => 'ih',
            'restriction_formula' => '',
            'description' => 'Tidak boleh digunakan berulang',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);

        // Category ke-7
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'midazolam',
            'form' => 'inj 1 mg/mL (i.v.)',
            'restriction_formula' => '- Dosis rumatan: 1 mg/jam (24 mg/hari). - Dosis premedikasi: 8 vial/kasus',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);

        // Category ke-8
        DB::table('medicines')->insert([
            'generic_name' => 'deksametason',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '20 mg/hari.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'difenhidramin',
            'form' => 'inj 10 mg/mL (i.v./i.m.)',
            'restriction_formula' => '30 mg/hari.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'epinefrin (adrenalin)',
            'form' => 'inj 1 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);

        // Category ke-9
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'tab 0,5 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'efedrin',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'kalsium glukonat',
            'form' => 'inj 10%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);

        // Category ke-10
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '10 amp/kasus, kecuali untuk kasus di ICU.',
            'description' => 'Tidak untuk i.m.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'fenitoin',
            'form' => 'kaps 30 mg*',
            'restriction_formula' => '90 kaps/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'fenobarbital',
            'form' => 'tab 30 mg*',
            'restriction_formula' => '120 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
    }
}
