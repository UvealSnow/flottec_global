<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    	DB::table('users')->insert([
    		'status' => 'active',
    		'type' => 'admin',
    		'name' => 'Flottec Admin',
    		'company' => 'Flottec',
    		'telephone' => '123234345',
    		'locale' => 'en',
    		'email' => 'admin@flottec.com',
    		'password' => bcrypt('Flottec1234'),
    		'created_at' => date('r'),
    		'updated_at' => date('r'),
    	]);

        DB::table('products')->insert([
            ['category_id' => 1, 'uri' => 'flottec-sex', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SEX', 'mineral' => '', 'chemical_description_en' => 'Sodium Ethyl Xanthate', 'chemical_family_es' => 'Ethyl'],
            ['category_id' => 1, 'uri' => 'flottec-sipx', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SIPX', 'mineral' => '', 'chemical_description_en' => 'Sodium Isopropyl Xanthate', 'chemical_family_es' => 'Isopropyl'],
            ['category_id' => 1, 'uri' => 'flottec-sibx', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SIBX', 'mineral' => '', 'chemical_description_en' => 'Sodium Isobutyl Xanthate', 'chemical_family_es' => 'Isobutyl'],
            ['category_id' => 1, 'uri' => 'flottec-pax', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec PAX', 'mineral' => '', 'chemical_description_en' => 'Sodium Amyl Xanthate', 'chemical_family_es' => 'Amyl'],
            ['category_id' => 2, 'uri' => 'flottec-20', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 20', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description_en' => 'Ethyl Ethyl Xanthogen Formate', 'chemical_family_es' => 'ethyl'],
            ['category_id' => 2, 'uri' => 'flottec-34', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 34', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description_en' => 'iPropyl Ethyl Xanthogen Formate', 'chemical_family_es' => 'i-propyl'],
            ['category_id' => 2, 'uri' => 'flottec-40', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 40', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description_en' => 'nButyl Ethyl Xanthogen Formate', 'chemical_family_es' => 'n-butyl'],
            ['category_id' => 2, 'uri' => 'flottec-44', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 44', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description_en' => 'iButyl Ethyl Xanthogen Formate', 'chemical_family_es' => 'i-butyl'],
            ['category_id' => 2, 'uri' => 'flottec-54', 'classification_en' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 54', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description_en' => 'pAmyl Ethyl Xanthogen Formate', 'chemical_family_es' => 'p-amyl'],
            ['category_id' => 3, 'uri' => 'flottec-304', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 304', 'mineral' => '', 'chemical_description_en' => 'iButyl Allyl Xanthate Ester', 'chemical_family_es' => 'i-butyl'],
            ['category_id' => 3, 'uri' => 'flottec-305', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 305', 'mineral' => '', 'chemical_description_en' => 'pAmyl Allyl Xanthate Ester', 'chemical_family_es' => 'p-amyl'],
            ['category_id' => 3, 'uri' => 'flottec-359', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 359', 'mineral' => '', 'chemical_description_en' => 'Formulated Allyl Xanthate Ester', 'chemical_family_es' => ''],
            ['category_id' => 4, 'uri' => 'flottec-1134', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description_en' => 'iPropyl Methyl Thionocarbamate', 'chemical_family_es' => 'i-propyl'],
            ['category_id' => 4, 'uri' => 'flottec-1140', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1140', 'mineral' => '', 'chemical_description_en' => 'nButyl Methyl Thionocarbamate', 'chemical_family_es' => 'n-butyl'],
            ['category_id' => 4, 'uri' => 'flottec-1134', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description_en' => 'iButyl Methyl Thionocarbamate', 'chemical_family_es' => 'i-butyl'],
            ['category_id' => 4, 'uri' => 'flottec-1134', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description_en' => 'iPropyl Methyl Thionocarbamate', 'chemical_family_es' => 'i-propyl'],
            ['category_id' => 4, 'uri' => 'flottec-1134', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description_en' => 'nButyl Methyl Thionocarbamate', 'chemical_family_es' => 'n-butyl'],
            ['category_id' => 5, 'uri' => 'flottec-1134', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description_en' => 'iButyl Methyl Thionocarbamate', 'chemical_family_es' => 'i-butyl'],
            ['category_id' => 6, 'uri' => 'flottec-1344', 'classification_en' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1344', 'mineral' => '', 'chemical_description_en' => 'iButyl Allyl Thionocarbamate', 'chemical_family_es' => 'i-butyl'],
            ['category_id' => 6, 'uri' => 'flottec-2020', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2020', 'mineral' => '', 'chemical_description_en' => 'Na Diethyl Dithiophosphate', 'chemical_family_es' => 'diethyl'],
            ['category_id' => 6, 'uri' => 'flottec-2034', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2034', 'mineral' => '', 'chemical_description_en' => 'Na Diisopropyl Dithiophosphate', 'chemical_family_es' => 'diisopropyl'],
            ['category_id' => 6, 'uri' => 'flottec-2041', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2041', 'mineral' => '', 'chemical_description_en' => 'Na Disecbuthyl Dithiophosphate', 'chemical_family_es' => 'disecbuthyl'],
            ['category_id' => 6, 'uri' => 'flottec-2044', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2044', 'mineral' => '', 'chemical_description_en' => 'Na Diisobutyl Dithiophosphate', 'chemical_family_es' => 'diisobutyl'],
            ['category_id' => 7, 'uri' => 'flottec-2054', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2054', 'mineral' => '', 'chemical_description_en' => 'Na Amyl Dithiophosphate', 'chemical_family_es' => 'diethyl'],
            ['category_id' => 7, 'uri' => 'flottec-2075', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2075', 'mineral' => '', 'chemical_description_en' => 'Formulated Dithiophosphate', 'chemical_family_es' => 'diethyl'],
            ['category_id' => 7, 'uri' => 'flottec-2200', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2200', 'mineral' => '', 'chemical_description_en' => 'Na Dicresyl Dithiophosphate', 'chemical_family_es' => 'dicresyl'],
            ['category_id' => 7, 'uri' => 'flottec-2200-lf', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2200 LF', 'mineral' => '', 'chemical_description_en' => 'Na Dicresyl Dithiophosphate (Low Frothing)', 'chemical_family_es' => 'dicresyl'],
            ['category_id' => 7, 'uri' => 'flottec-2300', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2300', 'mineral' => '', 'chemical_description_en' => 'Ammonium Dicresyl Dithiophosphate', 'chemical_family_es' => 'dicresyl'],
            ['category_id' => 8, 'uri' => 'flottec-2300-lf', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2300 LF', 'mineral' => '', 'chemical_description_en' => 'Ammonium Dicresyl Dithiophosphate (Low Frothing)', 'chemical_family_es' => 'dicresyl'],
            ['category_id' => 9, 'uri' => 'flottec-2644', 'classification_en' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2644', 'mineral' => '', 'chemical_description_en' => 'Na Diisobutyl Monothiophosphates', 'chemical_family_es' => 'diisobutyl']

        ]);

        DB::table('categories')->insert([
            ['id' => 1, 'uri' => 'xanthate-series', 'name_en' => 'Xanthate Series'],
            ['id' => 2, 'uri' => 'xanthogen-formate-series', 'name_en' => 'Xanthogen Formate Series'],
            ['id' => 3, 'uri' => 'xanthate-ester-series', 'name_en' => 'Xanthate Ester Series'],
            ['id' => 4, 'uri' => 'alkyl-thionocarbamate-series', 'name_en' => 'Alkyl Thionocarbamate Series'],
            ['id' => 5, 'uri' => 'allyl-thionocarbamates', 'name_en' => 'Allyl Thionocarbamates'],
            ['id' => 6, 'uri' => 'sodium-dialkyl-dithiophosphate-series', 'name_en' => 'Sodium Dialkyl Dithiophosphate Series'],
            ['id' => 7, 'uri' => 'dicresyl-dithiophosphate-series', 'name_en' => 'Dicresyl Dithiophosphate Series'],
            ['id' => 8, 'uri' => 'sodium-dialkyl-monothiophosphates', 'name_en' => 'Sodium Dialkyl Monothiophosphates'],
            ['id' => 9, 'uri' => 'sodium-dicresyl-monothiophosphates', 'name_en' => 'Sodium Dicresyl Monothiophosphates'],
        ]);

    }
}
