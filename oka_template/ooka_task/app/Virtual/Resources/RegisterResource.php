/**
 * @OA\Schema(
 *     title="RegisterResource",
 *     description="Warga resource",
 *     @OA\Xml(
 *         name="RegisterResource"
 *     )
 * )
 */
class ProjectResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Register[]
     */
    private $data;
}