<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            // Sulfhydryl Collectors and Frothers
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SEX', 'mineral' => '', 'chemical_description' => 'Sodium Ethyl Xanthate', 'chemical_family' => 'Ethyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SIPX', 'mineral' => '', 'chemical_description' => 'Sodium Isopropyl Xanthate', 'chemical_family' => 'Isopropyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec SIBX', 'mineral' => '', 'chemical_description' => 'Sodium Isobutyl Xanthate', 'chemical_family' => 'Isobutyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec PAX', 'mineral' => '', 'chemical_description' => 'Sodium Amyl Xanthate', 'chemical_family' => 'Amyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 20', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'Ethyl Ethyl Xanthogen Formate', 'chemical_family' => 'ethyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 34', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'iPropyl Ethyl Xanthogen Formate', 'chemical_family' => 'i-propyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 40', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'nButyl Ethyl Xanthogen Formate', 'chemical_family' => 'n-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 44', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'iButyl Ethyl Xanthogen Formate', 'chemical_family' => 'i-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthogen Formate Series', 'classification' => 'Carbon Disulfide Based Collectors', 'name' => 'Flottec 54', 'mineral' => 'Cu, Pb, Zn, Ni', 'chemical_description' => 'pAmyl Ethyl Xanthogen Formate', 'chemical_family' => 'p-amyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthate Ester Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 304', 'mineral' => '', 'chemical_description' => 'iButyl Allyl Xanthate Ester', 'chemical_family' => 'i-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthate Ester Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 305', 'mineral' => '', 'chemical_description' => 'pAmyl Allyl Xanthate Ester', 'chemical_family' => 'p-amyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Xanthate Ester Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 359', 'mineral' => '', 'chemical_description' => 'Formulated Allyl Xanthate Ester', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iPropyl Methyl Thionocarbamate', 'chemical_family' => 'i-propyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1140', 'mineral' => '', 'chemical_description' => 'nButyl Methyl Thionocarbamate', 'chemical_family' => 'n-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iButyl Methyl Thionocarbamate', 'chemical_family' => 'i-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iPropyl Methyl Thionocarbamate', 'chemical_family' => 'i-propyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'nButyl Methyl Thionocarbamate', 'chemical_family' => 'n-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Alkyl Thionocarbamate Series', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1134', 'mineral' => '', 'chemical_description' => 'iButyl Methyl Thionocarbamate', 'chemical_family' => 'i-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Allyl Thionocarbamates', 'classification' => 'Carbon Disulfide Based Collector', 'name' => 'Flottec 1344', 'mineral' => '', 'chemical_description' => 'iButyl Allyl Thionocarbamate', 'chemical_family' => 'i-butyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2020', 'mineral' => '', 'chemical_description' => 'Na Diethyl Dithiophosphate', 'chemical_family' => 'diethyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2034', 'mineral' => '', 'chemical_description' => 'Na Diisopropyl Dithiophosphate', 'chemical_family' => 'diisopropyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2041', 'mineral' => '', 'chemical_description' => 'Na Disecbuthyl Dithiophosphate', 'chemical_family' => 'disecbuthyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2044', 'mineral' => '', 'chemical_description' => 'Na Diisobutyl Dithiophosphate', 'chemical_family' => 'diisobutyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2054', 'mineral' => '', 'chemical_description' => 'Na Amyl Dithiophosphate', 'chemical_family' => 'diethyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dialkyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2075', 'mineral' => '', 'chemical_description' => 'Formulated Dithiophosphate', 'chemical_family' => 'diethyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2200', 'mineral' => '', 'chemical_description' => 'Na Dicresyl Dithiophosphate', 'chemical_family' => 'dicresyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2200 LF', 'mineral' => '', 'chemical_description' => 'Na Dicresyl Dithiophosphate (Low Frothing)', 'chemical_family' => 'dicresyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2300', 'mineral' => '', 'chemical_description' => 'Ammonium Dicresyl Dithiophosphate', 'chemical_family' => 'dicresyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Dicresyl Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2300 LF', 'mineral' => '', 'chemical_description' => 'Ammonium Dicresyl Dithiophosphate (Low Frothing)', 'chemical_family' => 'dicresyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dialkyl Monothiophosphates', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2644', 'mineral' => '', 'chemical_description' => 'Na Diisobutyl Monothiophosphates', 'chemical_family' => 'diisobutyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dicresyl Monothiophosphates Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2600', 'mineral' => '', 'chemical_description' => 'Na Dicresyl Monothiophosphate', 'chemical_family' => 'dicresyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Sodium Dicresyl Monothiophosphates Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2600 LF', 'mineral' => '', 'chemical_description' => 'Na Dicresyl Monothiophosphate (Low Frothing)', 'chemical_family' => 'dicresyl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Specialty Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2500', 'mineral' => '', 'chemical_description' => 'Non Aquesous Dithiophosphate', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Specialty Dithiophosphate Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 2444', 'mineral' => '', 'chemical_description' => 'Diisobutyl Dithiophosphate (Loq Frothing)', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Mercapto Benyl Thiazole Based Collector Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 500', 'mineral' => '', 'chemical_description' => 'Na MBT', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Mercapto Benyl Thiazole Based Collector Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 514', 'mineral' => '', 'chemical_description' => 'Formulated MBT', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Mercapto Benyl Thiazole Based Collector Series', 'classification' => 'Phosphorus Pentasulfide Based Collector', 'name' => 'Flottec 521', 'mineral' => '', 'chemical_description' => 'Formulated MBT', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F100 Series', 'mineral' => '', 'chemical_description' => 'Aromatic Based', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F110 Series', 'mineral' => '', 'chemical_description' => 'Triexthoxybuthane Based', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F120 Series', 'mineral' => '', 'chemical_description' => 'Alcohol Based', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F130 Series', 'mineral' => '', 'chemical_description' => 'Specialty Alcohols', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F140 Series', 'mineral' => '', 'chemical_description' => 'Formulated CoProduct Based', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F150 Series', 'mineral' => '', 'chemical_description' => 'Polypropylene Glycols', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F160 Series', 'mineral' => '', 'chemical_description' => 'PolyGlycol Ethers', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Frother Series', 'classification' => 'Frothers', 'name' => 'Flottec F170 - F199', 'mineral' => '', 'chemical_description' => 'Formulated Frothers', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            
            // Surfactants
            ['category' => 'Dewatering Aids', 'classification' => 'Surfactants', 'name' => 'Flottec 470', 'mineral' => '', 'chemical_description' => 'Liquid Surfractants', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Dewatering Aids', 'classification' => 'Surfactants', 'name' => 'Flottec 470G', 'mineral' => '', 'chemical_description' => 'Liquid Surfractants', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            
            ['category' => 'Antiscalant', 'classification' => 'Processing Aids', 'name' => 'Flottec 600', 'mineral' => '', 'chemical_description' => 'Dispersant', 'chemical_family' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

        ]);

        // DB::table('products')->insert([
        //     'id' => '1',
        //     'name' => 'Product 1',
        //     'mineral' => 'Mineral 1',
        // ]);

    }
}
