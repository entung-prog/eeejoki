export type UserRole = 'owner' | 'admin' | 'worker' | 'customer' | 'affiliate';
export interface AuthUser { id: number; name: string; email: string; role: UserRole; wallet_balance: string; referral_code?: string; }
export interface PageProps { auth: { user: AuthUser | null }; flash: { success?: string; error?: string }; [key: string]: unknown; }
export interface Order { id: number; orderCode: string; title: string; description: string; deadline: string; priority: string; status: string; totalPrice: string; workerFee: string; revisionCount: number; }
