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

    	// DB::table('users')->insert([
    	// 	'status' => 'active',
    	// 	'type' => 'admin',
    	// 	'name' => 'Flottec Admin',
    	// 	'company' => 'Flottec',
    	// 	'telephone' => '123234345',
    	// 	'locale' => 'en',
    	// 	'email' => 'admin@flottec.com',
    	// 	'password' => bcrypt('Flottec1234'),
    	// 	'created_at' => date('r'),
    	// 	'updated_at' => date('r'),
    	// ]);

        DB::table('products')->insert([
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SEX', 'mineral' => '', 'chemical_description' => 'Sodium Ethyl Xanthate', 'chemical_family' => 'Ethyl'],
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SIPX', 'mineral' => '', 'chemical_description' => 'Sodium Isopropyl Xanthate', 'chemical_family' => 'Isopropyl'],
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SIBX', 'mineral' => '', 'chemical_description' => 'Sodium Isobutyl Xanthate', 'chemical_family' => 'Isobutyl'],
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec PAX', 'mineral' => '', 'chemical_description' => 'Sodium Amyl Xanthate', 'chemical_family' => 'Amyl'],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 20', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'Ethyl Ethyl Xanthogen Formate', 'chemical_family' => 'ethyl'],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 34', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'iPropyl Ethyl Xanthogen Formate', 'chemical_family' => 'i-propyl'],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 40', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'nButyl Ethyl Xanthogen Formate', 'chemical_family' => 'n-butyl'],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 44', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'iButyl Ethyl Xanthogen Formate', 'chemical_family' => 'i-butyl'],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 54', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'pAmyl Ethyl Xanthogen Formate', 'chemical_family' => 'p-amyl'],
            ['category' => 'Xanthate Ester Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 304', 'mineral' => '', 'chemical_description' => 'iButyl Allyl Xanthate Ester', 'chemical_family' => 'i-butyl'],
            ['category' => 'Xanthate Ester Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 305', 'mineral' => '', 'chemical_description' => 'pAmyl Allyl Xanthate Ester', 'chemical_family' => 'p-amyl'],
            ['category' => 'Xanthate Ester Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 359', 'mineral' => '', 'chemical_description' => 'Formulated Allyl Xanthate Ester', 'chemical_family' => ''],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iPropyl Methyl Thionocarbamate', 'chemical_family' => 'i-propyl'],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1140', 'mineral' => '', 'chemical_description' => 'nButyl Methyl Thionocarbamate', 'chemical_family' => 'n-butyl'],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iButyl Methyl Thionocarbamate', 'chemical_family' => 'i-butyl'],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iPropyl Methyl Thionocarbamate', 'chemical_family' => 'i-propyl'],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'nButyl Methyl Thionocarbamate', 'chemical_family' => 'n-butyl'],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iButyl Methyl Thionocarbamate', 'chemical_family' => 'i-butyl'],
            ['category' => 'Allyl Thionocarbamates', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1344', 'mineral' => '', 'chemical_description' => 'iButyl Allyl Thionocarbamate', 'chemical_family' => 'i-butyl'],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2020', 'mineral' => '', 'chemical_description' => 'Na Diethyl Dithiophosphate', 'chemical_family' => 'diethyl'],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2034', 'mineral' => '', 'chemical_description' => 'Na Diisopropyl Dithiophosphate', 'chemical_family' => 'diisopropyl'],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2041', 'mineral' => '', 'chemical_description' => 'Na Disecbuthyl Dithiophosphate', 'chemical_family' => 'disecbuthyl'],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2044', 'mineral' => '', 'chemical_description' => 'Na Diisobutyl Dithiophosphate', 'chemical_family' => 'diisobutyl'],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2054', 'mineral' => '', 'chemical_description' => 'Na Amyl Dithiophosphate', 'chemical_family' => 'diethyl'],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2075', 'mineral' => '', 'chemical_description' => 'Formulated Dithiophosphate', 'chemical_family' => 'diethyl'],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2200', 'mineral' => '', 'chemical_description' => 'Na Dicresyl Dithiophosphate', 'chemical_family' => 'dicresyl'],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2200 LF', 'mineral' => '', 'chemical_description' => 'Na Dicresyl Dithiophosphate (Low Frothing)', 'chemical_family' => 'dicresyl'],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2300', 'mineral' => '', 'chemical_description' => 'Ammonium Dicresyl Dithiophosphate', 'chemical_family' => 'dicresyl'],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2300 LF', 'mineral' => '', 'chemical_description' => 'Ammonium Dicresyl Dithiophosphate (Low Frothing)', 'chemical_family' => 'dicresyl'],
            ['category' => 'Sodium Dialkyl Monothiophosphates', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2644', 'mineral' => '', 'chemical_description' => 'Na Diisobutyl Monothiophosphates', 'chemical_family' => 'diisobutyl'],
            ['category' => 'Sodium Dicresyl Monothiophosphates', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2644', 'mineral' => '', 'chemical_description' => 'Na Diisobutyl Monothiophosphates', 'chemical_family' => 'diisobutyl'],
            ['category' => '', 'classification' => '', 'name' => '', 'mineral' => '', 'chemical_description' => '', 'chemical_family' => ''],

        ]);

    }
}
