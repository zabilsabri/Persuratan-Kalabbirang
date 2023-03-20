/**
 * @OA\Schema(
 *      title="Store Warga request",
 *      description="Store Warga request body data",
 *      type="object",
 *      required={"name"}
 * )
 */

class StoreWargaRequest
{
   /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Nama",
     *      description="Nama Warga",
     *      example="A nice project"
     * )
     *
     * @var string
     */
    public $nama;

    /**
     * @OA\Property(
     *      title="Username",
     *      description="Username Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $username;

    /**
     * @OA\Property(
     *      title="Nik",
     *      description="NIK Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $nik;
    
    /**
     * @OA\Property(
     *      title="Ttl",
     *      description="TTL Warga",
     *      format="datetime",
     *      type="string"
     *      example="This is new project's description"
     * )
     *
     * @var \DateTime
     */
    public $ttl;
    
    /**
     * @OA\Property(
     *      title="jkl",
     *      description="Jenis Kelamin Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $jkl;
    
    /**
     * @OA\Property(
     *      title="Alamat",
     *      description="Alamat Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $alamat;
    
    /**
     * @OA\Property(
     *      title="Nomor KK",
     *      description="Nomor KK Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $nomor_kk;
    
    /**
     * @OA\Property(
     *      title="Nomor Telepon",
     *      description="Nomor Telepon Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $nomor_telp;
    
    /**
     * @OA\Property(
     *      title="Email",
     *      description="Email Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $email;
    
    /**
     * @OA\Property(
     *      title="Foto Profil",
     *      description="Foto Profil Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $profil;
    
    /**
     * @OA\Property(
     *      title="FOto KTP",
     *      description="FOto KTP Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $ktp;
    
    /**
     * @OA\Property(
     *      title="FOto Swafoto KTP",
     *      description="FOto Swafoto KTP Warga",
     *      example="This is new project's description"
     * )
     *
     * @var string
     */
    public $swafoto_ktp;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;


}