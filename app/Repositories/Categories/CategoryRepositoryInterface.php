<?php

namespace App\Repositories\Categories;

interface CategoryRepositoryInterface
{
    /**
     * All categories count.
     *
     * @return mixed
     */
    public static function allCatesCount();

    /**
     * Main categories count.
     *
     * @return mixed
     */
    public static function parentCatesCount();

    /**
     * Subcategories count.
     *
     * @return mixed
     */
    public static function childCatesCount();

    /**
     * Categories in descending order.
     *
     * @return mixed
     */
    public function allCatesDesc();

    /**
     * Categories in descending order and their filters pipelines.
     *
     * @return mixed
     */
    public function allCatesDescWithFilters();

    /**
     * Pipeline filtered categories in descending order.
     * Used for create method.
     *
     * @return mixed
     */
    public function nestedCates();

    /**
     * Pipeline filtered main categories in descending order.
     * Used for edit method.
     *
     * @param object $cate
     * @return object
     */
    public function mainCatesToEditSubcate($cate);

    /**
     * Store categories.
     *
     * @param object $request
     * @return void
     */
    public function cateStore($request);

    /**
     * Validate that request main category id isn't neither the category of action nor its nested categories.
     *
     * @author Ahmed Salah
     * 
     * @param int $id
     * @param int $mainCateId
     * @return mixed
     */
    public function validateSubsUpdate($id, $mainCateId);

    /**
     * Update categories.
     *
     * @param object $cate
     * @param object $request
     * @return void
     */
    public function cateUpdate($cate, $request);

    /**
     * Delete categories.
     *
     * @param object $cate
     * @return void
     */
    public function cateDelete($cate);

    /**
     * Get category row of an id.
     *
     * @param int $id
     * @return object
     */
    public function findCateRowById($id);
}
