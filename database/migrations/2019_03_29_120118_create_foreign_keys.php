<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('doctors', function(Blueprint $table) {
			$table->foreign('hospital_id')->references('id')->on('hospitals')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('doctors', function(Blueprint $table) {
			$table->foreign('specialization_id')->references('id')->on('specializations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hospitals', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hospitals', function(Blueprint $table) {
			$table->foreign('district_id')->references('id')->on('districts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hospitals', function(Blueprint $table) {
			$table->foreign('specialization_id')->references('id')->on('specializations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('hospitals_users', function(Blueprint $table) {
			$table->foreign('hospital_id')->references('id')->on('hospitals')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('doctors_books', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('doctors_books', function(Blueprint $table) {
			$table->foreign('hospital_id')->references('id')->on('hospitals')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_bot_messages', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('clinical_pharmacologies', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('indication_usages', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('usages_symptoms', function(Blueprint $table) {
			$table->foreign('usage_id')->references('id')->on('indication_usages')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('contraindications', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('warnings', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('recommed_medcations', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('recommend_doctors', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
//		Schema::table('users', function(Blueprint $table) {
//			$table->foreign('city_id')->references('id')->on('cities')
//						->onDelete('restrict')
//						->onUpdate('restrict');
//		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('district_id')->references('id')->on('districts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('districts', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('friends', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_sports', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_sports', function(Blueprint $table) {
			$table->foreign('sport_id')->references('id')->on('sports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('meeting_medications', function(Blueprint $table) {
			$table->foreign('meeting_id')->references('id')->on('doctors_books')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('meeting_medications', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('meeting_diseases', function(Blueprint $table) {
			$table->foreign('doctors_book_id')->references('id')->on('doctors_books')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('meeting_diseases', function(Blueprint $table) {
			$table->foreign('disease_id')->references('id')->on('diseases')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('meeting_symptoms', function(Blueprint $table) {
			$table->foreign('doctors_book_id')->references('id')->on('doctors_books')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('meeting_symptoms', function(Blueprint $table) {
			$table->foreign('symptom_id')->references('id')->on('symptoms')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('precautions', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('adverse_reactions', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('drug_abuses', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('overdoses', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('adminstrate_doses', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('how_supplies', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_sencitivities', function(Blueprint $table) {
			$table->foreign('sencitivity_id')->references('id')->on('sencitivities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('pharmacies', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('pharmacies', function(Blueprint $table) {
			$table->foreign('district_id')->references('id')->on('districts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ph_repositories', function(Blueprint $table) {
			$table->foreign('pharmacy_id')->references('id')->on('pharmacies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ph_repositories', function(Blueprint $table) {
			$table->foreign('medication_id')->references('id')->on('medications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dependances', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_diets', function(Blueprint $table) {
			$table->foreign('diet_id')->references('id')->on('diets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('disease_symptoms', function(Blueprint $table) {
			$table->foreign('disease_id')->references('id')->on('diseases')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('disease_symptoms', function(Blueprint $table) {
			$table->foreign('symptom_id')->references('id')->on('symptoms')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('diagnosis', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('doctors', function(Blueprint $table) {
			$table->dropForeign('doctors_hospital_id_foreign');
		});
		Schema::table('doctors', function(Blueprint $table) {
			$table->dropForeign('doctors_specialization_id_foreign');
		});
		Schema::table('hospitals', function(Blueprint $table) {
			$table->dropForeign('hospitals_city_id_foreign');
		});
		Schema::table('hospitals', function(Blueprint $table) {
			$table->dropForeign('hospitals_district_id_foreign');
		});
		Schema::table('hospitals', function(Blueprint $table) {
			$table->dropForeign('hospitals_specialization_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_user_id_foreign');
		});
		Schema::table('hospitals_users', function(Blueprint $table) {
			$table->dropForeign('hospitals_users_hospital_id_foreign');
		});
		Schema::table('doctors_books', function(Blueprint $table) {
			$table->dropForeign('doctors_books_doctor_id_foreign');
		});
		Schema::table('doctors_books', function(Blueprint $table) {
			$table->dropForeign('doctors_books_hospital_id_foreign');
		});
		Schema::table('users_bot_messages', function(Blueprint $table) {
			$table->dropForeign('users_bot_messages_user_id_foreign');
		});
		Schema::table('clinical_pharmacologies', function(Blueprint $table) {
			$table->dropForeign('clinical_pharmacologies_medication_id_foreign');
		});
		Schema::table('indication_usages', function(Blueprint $table) {
			$table->dropForeign('indication_usages_medication_id_foreign');
		});
		Schema::table('usages_symptoms', function(Blueprint $table) {
			$table->dropForeign('usages_symptoms_usage_id_foreign');
		});
		Schema::table('contraindications', function(Blueprint $table) {
			$table->dropForeign('contraindications_medication_id_foreign');
		});
		Schema::table('warnings', function(Blueprint $table) {
			$table->dropForeign('warnings_medication_id_foreign');
		});
		Schema::table('recommed_medcations', function(Blueprint $table) {
			$table->dropForeign('recommed_medcations_medication_id_foreign');
		});
		Schema::table('recommend_doctors', function(Blueprint $table) {
			$table->dropForeign('recommend_doctors_doctor_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_city_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_district_id_foreign');
		});
		Schema::table('districts', function(Blueprint $table) {
			$table->dropForeign('districts_city_id_foreign');
		});
		Schema::table('friends', function(Blueprint $table) {
			$table->dropForeign('friends_user_id_foreign');
		});
		Schema::table('user_sports', function(Blueprint $table) {
			$table->dropForeign('user_sports_user_id_foreign');
		});
		Schema::table('user_sports', function(Blueprint $table) {
			$table->dropForeign('user_sports_sport_id_foreign');
		});
		Schema::table('meeting_medications', function(Blueprint $table) {
			$table->dropForeign('meeting_medications_meeting_id_foreign');
		});
		Schema::table('meeting_medications', function(Blueprint $table) {
			$table->dropForeign('meeting_medications_medication_id_foreign');
		});
		Schema::table('meeting_diseases', function(Blueprint $table) {
			$table->dropForeign('meeting_diseases_doctors_book_id_foreign');
		});
		Schema::table('meeting_diseases', function(Blueprint $table) {
			$table->dropForeign('meeting_diseases_disease_id_foreign');
		});
		Schema::table('meeting_symptoms', function(Blueprint $table) {
			$table->dropForeign('meeting_symptoms_doctors_book_id_foreign');
		});
		Schema::table('meeting_symptoms', function(Blueprint $table) {
			$table->dropForeign('meeting_symptoms_symptom_id_foreign');
		});
		Schema::table('precautions', function(Blueprint $table) {
			$table->dropForeign('precautions_medication_id_foreign');
		});
		Schema::table('adverse_reactions', function(Blueprint $table) {
			$table->dropForeign('adverse_reactions_medication_id_foreign');
		});
		Schema::table('drug_abuses', function(Blueprint $table) {
			$table->dropForeign('drug_abuses_medication_id_foreign');
		});
		Schema::table('overdoses', function(Blueprint $table) {
			$table->dropForeign('overdoses_medication_id_foreign');
		});
		Schema::table('adminstrate_doses', function(Blueprint $table) {
			$table->dropForeign('adminstrate_doses_medication_id_foreign');
		});
		Schema::table('how_supplies', function(Blueprint $table) {
			$table->dropForeign('how_supplies_medication_id_foreign');
		});
		Schema::table('users_sencitivities', function(Blueprint $table) {
			$table->dropForeign('users_sencitivities_sencitivity_id_foreign');
		});
		Schema::table('pharmacies', function(Blueprint $table) {
			$table->dropForeign('pharmacies_city_id_foreign');
		});
		Schema::table('pharmacies', function(Blueprint $table) {
			$table->dropForeign('pharmacies_district_id_foreign');
		});
		Schema::table('ph_repositories', function(Blueprint $table) {
			$table->dropForeign('ph_repositories_pharmacy_id_foreign');
		});
		Schema::table('ph_repositories', function(Blueprint $table) {
			$table->dropForeign('ph_repositories_medication_id_foreign');
		});
		Schema::table('dependances', function(Blueprint $table) {
			$table->dropForeign('dependances_user_id_foreign');
		});
		Schema::table('users_diets', function(Blueprint $table) {
			$table->dropForeign('users_diets_diet_id_foreign');
		});
		Schema::table('disease_symptoms', function(Blueprint $table) {
			$table->dropForeign('disease_symptoms_disease_id_foreign');
		});
		Schema::table('disease_symptoms', function(Blueprint $table) {
			$table->dropForeign('disease_symptoms_symptom_id_foreign');
		});
		Schema::table('diagnosis', function(Blueprint $table) {
			$table->dropForeign('diagnosis_patient_id_foreign');
		});
	}
}